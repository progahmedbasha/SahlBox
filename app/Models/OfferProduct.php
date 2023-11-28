<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferProduct extends Model
{
    use HasFactory;

    protected $casts = ['rule_count' => 'integer'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
