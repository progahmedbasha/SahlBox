<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\DiscountTypeEnum;
use App\Enums\ItemTypeEnum;

class Offer extends Model
{
    use HasFactory;

    protected $appends = ['discount_lable', 'discount', 'offer_on', 'discount_symbol'];
    protected $casts = [
        'discount_type' => DiscountTypeEnum::class ,
        'item_type' => ItemTypeEnum::class ,
    ];

    public function getDiscountLableAttribute()
    {
        return DiscountTypeEnum::getBy($this->discount_type);
    }

    public function getDiscountSymbolAttribute()
    {
        return DiscountTypeEnum::getSymbol($this->discount_type);
    }

    public function getDiscountAttribute()
    {
        if ($this->discount_type == DiscountTypeEnum::Value)
            return $this->discount_value;
        else {
            if ($this->item_type == ItemTypeEnum::Shipping)
                return 0;
            else {
                $product = $this->offerProducts->loadMissing('product');
                return ($product->product->price * $this->discount_value) / 100;
            }
        }
    }

    public function getOfferOnAttribute()
    {
        if ($this->item_type == ItemTypeEnum::Shipping)
            return ItemTypeEnum::getBy($this->item_type);
        else {
            $product = $this->offerProducts->loadMissing('product');
            return $product->product->type;
        }
    }
    public function offerProducts()
    {
        return $this->belongsTo(OfferProduct::class, 'id', 'offer_id');
    }

    public function rule()
    {
        return $this->belongsTo(Rule::class, 'id', 'offer_id');
    }
}
