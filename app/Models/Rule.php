<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    public function ruleProducts()
    {
        return $this->hasMany(RuleProduct::class);
    }
}
