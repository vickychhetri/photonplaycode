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
        return view('customer.shopv1');
    }
}
