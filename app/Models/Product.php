<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['vat','shipping_cost'];

    protected $casts = [
    ];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function getShippingCostAttribute()
    {
        $rate = (($this->weight * 1000) * $this->country->rate) / 100;
        return $rate;
    }
    public function getVatAttribute()
    {
        $vat = ($this->price * 14) / 100;
        return $vat;
    }
}
