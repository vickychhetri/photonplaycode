<?php

namespace App\Http\Controllers;

use App\Models\MasterConfiguration;
use App\Models\Product;
use App\Util\Configure;
use Illuminate\Http\Request;

class ShopBrowseController extends Controller
{
    function index()
    {
        // Get category ID for products to display
        $category_accessory_id = null;
        $config = MasterConfiguration::where('code', Configure::SHOW_CATEGORY_PRODUCT_IN_SHOP)->first();
        if ($config) {
            $category_accessory_id = $config->value;
        }

        // Get sorting order (default to ascending price)
        $sortOrder = request()->get('sort', 'asc');

        // Get products based on category and sorting order
        $productLists = Product::with(['images', 'specilizations.specilization', 'specilizations.options', 'specilizations.options.specializationoptions', 'category', 'product_resources'])
            ->where('category_id', $category_accessory_id);

        if ($sortOrder === 'asc') {
            $productLists = $productLists->orderBy('price', 'asc');
        } elseif ($sortOrder === 'desc') {
            $productLists = $productLists->orderBy('price', 'desc');
        }

        $productLists = $productLists->get();

        return view('customer.shopv1', compact('productLists', 'sortOrder'));
    }
}
