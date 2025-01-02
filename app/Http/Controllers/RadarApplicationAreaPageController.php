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


    public function campus(){
        $productLists = Product::where('category_id', 1)->whereIn('code',["R1","R2"])->take(5)->get();
        $currency_icon=Session::get('currency_icon', '$');
        $exchange_rate = session('exchange_rate', '1');

        return view("signv1.campus",compact('productLists','currency_icon','exchange_rate'));
    }

    public function school_zone(){
        $productLists = Product::where('category_id', 1)->whereIn('code',["R1","R2"])->take(5)->get();
        $currency_icon=Session::get('currency_icon', '$');
        $exchange_rate = session('exchange_rate', '1');

        return view("signv1.school_zone",compact('productLists','currency_icon','exchange_rate'));
    }


    public function parking_lot(){
        $productLists = Product::where('category_id', 1)->whereIn('code',["R1","R2"])->take(5)->get();
        $currency_icon=Session::get('currency_icon', '$');
        $exchange_rate = session('exchange_rate', '1');
        return view("signv1.parking_lot",compact('productLists','currency_icon','exchange_rate'));
    }

    public function neighbourhoods(){
        $productLists = Product::where('category_id', 1)->whereIn('code',["R1","R2"])->take(5)->get();
        $currency_icon=Session::get('currency_icon', '$');
        $exchange_rate = session('exchange_rate', '1');
        return view("signv1.neighbourhoods",compact('productLists','currency_icon','exchange_rate'));
    }

}
