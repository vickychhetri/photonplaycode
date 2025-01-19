<?php

namespace App\Util;

class Configure
{
    // Define constants for the configuration keys
    public const PRODUCT_CATEGORY_MULTI_NOT_REQUIRED = 'product_category_multi_not_required';
    public const SHOW_CATEGORY_PRODUCT_IN_SHOP = 'show_category_product_in_shop';
    public const CATEGORY_ACCESSORY_ID = 'category_accessory_id';

    // You can add methods to retrieve or manipulate these constants, if needed
    public static function getAllConfigurations(): array
    {
        return [
            self::PRODUCT_CATEGORY_MULTI_NOT_REQUIRED,
            self::SHOW_CATEGORY_PRODUCT_IN_SHOP,
        ];
    }
}
