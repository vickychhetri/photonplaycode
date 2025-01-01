<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RadarApplicationAreaPageController extends Controller
{
    public function municipalities(){
        $productLists = Product::where('category_id', 1)->whereIn('code',["R1","R2"])->take(5)->get();
        $currency_icon=Session::get('currency_icon', '$');
        $exchange_rate = session('exchange_rate', '1');

        return view("signv1.muncipalities",compact('productLists','currency_icon','exchange_rate'));
    }
}
