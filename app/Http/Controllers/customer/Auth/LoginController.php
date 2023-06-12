<?php

namespace App\Http\Controllers\customer\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Customer;
use Illuminate\Auth\Events\Validated;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Socialite;
use Stripe;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('customer')->user();
            return $next($request);
        });

        if(Session::get('user')){
            return redirect()->route('customer.dashboard');
        }else{
            return redirect()->route('customer.loginForm');
        }
    }

    public function loginForm(Request $request)
    {

        $loginuser_validate=Session::get('user');
        if($loginuser_validate){
            return redirect("radar-speed-signs");
        }

        $p = $request->p;
        $s = $request->s;
        return view('customer.auth.login', compact('p', 's'));
    }

    public function login(Request $request)
    {
        $sessionId = Session::getId();
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error',  $validator->errors()->first());
        }

        $credentials = $request->only('email', 'password');
        if (!Auth::guard('customer')->attempt($credentials)) {
            return redirect()->back()->with('error', "You have entered invalid credentials");
        }
        $session = Session::put('user', Auth::guard('customer')->user());
        $cart = Cart::where('session_id', $sessionId)->update(['user_id' => Session::get('user')->id]);

        if($cart){
            return redirect()->intended('shopping-bag')->with('success', ' Logged in successfully !');
        }
        return redirect()->intended('radar-speed-signs')->with('success', ' Logged in successfully !');
    }

    public function registerForm()
    {
        $loginuser_validate=Session::get('user');
        if($loginuser_validate){
            return redirect("radar-speed-signs");
        }
        return view('customer.auth.register');
    }

    public function register(Request $request)
    {
        $sessionId = Session::getId();
        $stripe = Stripe\Stripe::setApiKey(config('services.stripe.stripe_secret'));

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error',  $validator->errors()->first());
        }

        $customer = \Stripe\Customer::create([
            'email' => $request->email,
            'name' => $request->name,
        ]);
        $customer = Customer::create([
            'stripe_id' => $customer->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $session = Session::put('user', $customer);
        $cart = Cart::where('session_id', $sessionId)->update(['user_id' => Session::get('user')->id]);
        if($cart){
            return redirect()->intended('shopping-bag')->with('success', ' Logged in successfully !');
        }
        return redirect()->route('customer.loginForm')->with('success', 'Your account has been registered successfully');
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function Callback($provider)
    {
        try{
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        $users       =   User::where(['email' => $userSocial->getEmail()])->first();
        if ($users) {
            Auth::login($users);
            return redirect('/');
        } else {

            $user = Customer::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);

            return redirect()->route('home');
        }
        }catch(\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return back()->with('error', 'This email has been registered by normal signup.');
            } else {
                return back()->with('error', $e->getMessage());
            }
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->flush();
        return  redirect()->route("customer.loginForm");
    }
}
