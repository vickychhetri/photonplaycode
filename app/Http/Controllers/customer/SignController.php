<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\UserPostalCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SignController extends Controller
{
    public function radarSpeedSigns_menus(){

        return view('customer.profile.links_pages');
    }
    public function radarSpeedSigns(){
        $products = Product::where('category_id', 1)->get();
        return view('customer.sign', compact('products'));
    }

    public function radarSigns($id){
        $sessionId = Session::getId();
        $product = Product::with(['images'=>fn($r) => $r->where('color', 'amber'),'specilizations.specilization','specilizations.options','specilizations.options.specializationoptions','category'])->where('slug',$id)->first();
        $productLists = Product::where('category_id', 1)->take(5)->get();
        // dd($product);
        $postalCode = '';
        $cartCount = 0;
        if(Session::get('user')){
            $cartCount = Cart::where('user_id', Session::get('user')->id)->count();
            $postalCode = UserPostalCode::where('user_id', Session::get('user')->id)->first();
        }else{
            $postalCode = UserPostalCode::where('session_id', $sessionId)->first();
            $cartCount = Cart::where('session_id', $sessionId)->count();
        }

        return view('customer.radar_sign', compact('product','productLists','postalCode','cartCount'));
    }

    public function specificationAjax(Request $request){
        $specs = $request->dict;
        // dd($specs);
        $data = array();
        foreach($specs as $key => $spec){
           $ids =  DB::table('product_spcialization_options')->where('id', $spec)->orderBy('id', 'asc')->value('id');
           array_push($data, $ids);
        }
        return $data;
    }
}
