<?php

namespace App\Enums;

enum DiscountTypeEnum: string
{
    case Value = '1';
    case Percentage = '2';

    public static function getBy($slug)
    {
        return match ($slug) {
            self::Value => 'Value',
            self::Percentage => 'Percentage'
        };
    }

    public static function getSymbol($slug)
    {
        return match ($slug) {
            self::Value => '$',
            self::Percentage => '%'
        };
    }
}
