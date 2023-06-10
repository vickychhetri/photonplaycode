<?php

namespace App\Http\Controllers\customer\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Stripe;

class SocialLoginController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
            $sessionId = Session::getId();
            Stripe\Stripe::setApiKey(config('services.stripe.stripe_secret'));
            $user = Socialite::driver('google')->user();
            $finduser = Customer::where('provider_id', $user->id)->first();

            if($finduser){
                Auth::guard('customer')->login($finduser);
                Session::put('user', Auth::guard('customer')->user());
                $cart = Cart::where('session_id', $sessionId)->update(['user_id' => Session::get('user')->id]);
                if($cart){
                    return redirect()->intended('shopping-bag')->with('success', ' Logged in successfully !');
                }
                return redirect()->intended('radar-speed-signs');

            }else{

                $newUser = Customer::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider' => 'GOOGLE',
                    'provider_id'=> $user->id,
                ]);
                $customer = \Stripe\Customer::create([
                    'name' => isset($newUser->name) ? $newUser->name : null,
                    'email' => isset($newUser->email) ? $newUser->email : null,
                ]);
                if ($customer) {
                    $newUser->update(['stripe_id' => $customer->id]);
                }

                Auth::guard('customer')->login($newUser);
                Session::put('user', Auth::guard('customer')->user());
                $cart = Cart::where('session_id', $sessionId)->update(['user_id' => Session::get('user')->id]);
                if($cart){
                    return redirect()->intended('shopping-bag')->with('success', ' Logged in successfully !');
                }
                return redirect()->intended('radar-speed-signs');
            }

        }
        catch (\Exception $e) {
            return redirect('/login')->with('error', 'This email has been registered by normal signup.');
        }
    }
}
