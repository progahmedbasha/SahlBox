<?php

namespace App\Repository;

use App\Models\Offer;
use App\Models\OfferProduct;
use App\Models\Rule;
use App\Models\RuleProduct;
use App\Enums\ItemTypeEnum;
use App\Repository\Interfaces\IOfferRepository;

class OfferRepository implements IOfferRepository
{
    public function getAllOffers()
    {
        return Offer::paginate(config('admin.pagination'));
    }
    public function createOffer($data)
    {
        $offer = new Offer();
        $offer->discount_type = $data->discount_type;
        $offer->discount_value = $data->discount_value;
        $offer->item_type = $data->item_type;
        $offer->save();

        if ($offer->item_type == ItemTypeEnum::Product) {
            $offer_products = new OfferProduct();
            $offer_products->offer_id = $offer->id;
            $offer_products->product_id = $data->offer_product_id;
            $offer_products->save();
        }
        if ($data->has_rule == 2) {
            $rule = new Rule();
            $rule->offer_id = $offer->id;
            $rule->rule_count = $data->item_count;
            $rule->save();

            if ($data->is_specific == 2) {
                foreach ($data->products_id as $id) {
                    $rule_product = new RuleProduct();
                    $rule_product->rule_id = $rule->id;
                    $rule_product->products_id = $id;
                    $rule_product->save();
                }
            }
        }
    }
}
