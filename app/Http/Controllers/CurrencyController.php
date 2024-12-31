<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CurrencyController extends Controller
{
    public function changeCurrency(Request $request)
    {
        $currencyCode = $request->input('currency');
        $currencyHandler = Currency::where('currency_code', $currencyCode)->first();

        if ($currencyHandler) {
            Session::put('currency_icon', $currencyHandler->currency_code);
            Session::put('exchange_rate', $currencyHandler->exchange_rate);

            if(Session::get('user')){
                Cart::where('user_id', Session::get('user')->id)->delete();
            }else{
                $customer = Session::getId();
                DB::table('carts')->where('session_id', $customer)->delete();
            }
        }

        return back()->with('success', 'Currency updated successfully!');
    }
}
