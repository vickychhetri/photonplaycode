<?php

namespace App\Util;

class Configure
{
    // Define constants for the configuration keys
    public const PRODUCT_CATEGORY_MULTI_NOT_REQUIRED = 'product_category_multi_not_required';

    // You can add methods to retrieve or manipulate these constants, if needed
    public static function getAllConfigurations(): array
    {
        return [
            self::PRODUCT_CATEGORY_MULTI_NOT_REQUIRED,
        ];
    }
}
