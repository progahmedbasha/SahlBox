<?php

namespace App\Enums;

enum ItemTypeEnum: string
{
    case Shipping = '1';
    case Product = '2';

    public static function getBy($slug)
    {
        return match ($slug) {
            self::Shipping => 'Shipping',
            self::Product => 'Product'
        };
    }
}
