<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuleProduct extends Model
{
    use HasFactory;

    //protected $casts = ['products_id' => 'array'];


    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
}
