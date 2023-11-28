<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\IWebsiteRepository;
use Illuminate\Database\Eloquent\Builder;
use App\Enums\ItemTypeEnum;
use App\Enums\DiscountTypeEnum;
use App\Models\Offer;
use App\Models\Product;
use App\Models\RuleProduct;
use App\Models\Rule;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
        public $cart;

    public function __construct(IWebsiteRepository $cart)
    {
        $this->cart = $cart;
    }
    public function index()
    {
        $products = $this->cart->getAllProducts();
        return view('ecommerce.index')->with('products', $products);
    }
    public function store(Request $request)
    {
        $products = Product::whereIn('id', $request->product_id)->get();
        $subtotal = $products->sum('price');
        $vat = $products->sum('vat');
        $shipping = $products->sum('shipping_cost');
        $offers = $this->offers($request->product_id);
        $discounts = [];
        $total_discount = 0;
        foreach ($offers as $offer) {
            $discount = $offer->discount;
            if ($offer->discount_type == DiscountTypeEnum::Percentage && $offer->item_type == ItemTypeEnum::Shipping) {
                $discount = ($offer->discount_value * $shipping) / 100;
            }
            $data['message'] = '' . $offer->discount_symbol . $offer->discount_value . ' off ' . $offer->offer_on . ': -$' . $discount;
            $data['value'] = $discount;
            $total_discount += $discount;
            array_push($discounts, $data);
        }
        return view('ecommerce.shopping-cart', compact('products', 'discounts', 'total_discount'));
    }


    public function offers($request)
    {
        $offers_without_rule = Offer::with('offerproducts')
            ->where(function (Builder $query) use ($request) {
                return $query->whereDoesntHave('offerproducts')
                    ->orWhereHas('offerproducts.product', function (Builder $query1) use ($request) {
                            $query1->whereIn('id', $request);
                        }
                    );
            })->whereDoesntHave('rule')->get();
             $offers_with_rule = Offer::with('offerproducts')
            ->where(function (Builder $query) use ($request) {
                return $query->whereDoesntHave('offerproducts')
                ->orWhereHas('offerproducts.product', function (Builder $query1) use ($request) {
                    $query1->whereIn('id', $request);
                });
            })
            ->whereHas('rule', function (Builder $query2) use ($request) {
                    $query2->whereDoesntHave('ruleProducts')->where('rule_count', '<=', count($request));
        })->get();
        $offers_with_rule_products = Offer::with('offerproducts')
            ->where(function (Builder $query) use ($request) {
                return $query->whereDoesntHave('offerproducts')
                    ->orWhereHas(
                        'offerproducts.product',
                        function (Builder $query1) use ($request) {
                                $query1->whereIn('id', $request);
                            }
                    );
            })->whereHas('rule.ruleProducts', function (Builder $query) use ($request) {
                    $query->whereIn('products_id', $request);
            }, '>', 'rule_count')->get();
        $offers = $offers_without_rule->merge($offers_with_rule);
        $offers = $offers->merge($offers_with_rule_products);
        return $offers;
    }
}
