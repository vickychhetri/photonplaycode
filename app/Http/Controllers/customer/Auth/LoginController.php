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
        $total_cart_count = 0;
        if(!Session::get('user')){
            $cart_table =  Cart::select('quantity')->where('session_id', Session::getId())->get();
            foreach($cart_table as $cart_t){
                $total_cart_count+= $cart_t->quantity;
            }
        }else {
            $cart_table =  Cart::select('quantity')->where('user_id', Session::get('user')->id)->get();
            foreach($cart_table as $cart_t){
                $total_cart_count += $cart_t->quantity;
            }
        }

        $loginuser_validate=Session::get('user');
        if($loginuser_validate){
            return redirect("radar-speed-signs");
        }

        $p = $request->p;
        $s = $request->s;
        return view('customer.auth.login', compact('p', 's','total_cart_count'));
    }

    public function login(Request $request)
    {
        $sessionId = Session::getId();
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:customers,email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'The email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.exists' => 'This email does not exist in our records.',
            'password.required' => 'The password field cannot be empty.',
            'password.min' => 'The password must be at least 6 characters long.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');
        if (!Auth::guard('customer')->attempt($credentials)) {
            return redirect()->back()->with('error', "You have entered invalid credentials");
        }

        $userLogged=Auth::guard('customer')->user();
        if($userLogged){
            if($userLogged->is_block){
                return redirect()->back()->with('error', "Your Account Blocked !");
            }
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
            'name' => 'required|string|max:255',
            'last_name'=>'nullable|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'max:12',  // Ensure the password length is between 8 and 12 characters
                'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,12}$/',  // Enforce rules for uppercase, number, and special character
            ],
            'password_confirmation' => 'required',
        ], [
            'email.unique' => 'This email address is already registered. Please try logging in or use a different email address.',
            'password.regex' => 'Password must be 8-12 characters long, contain at least one uppercase letter, one number, and one special character (e.g., @$!%*?&).',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $customer = \Stripe\Customer::create([
            'email' => $request->email,
            'name' => $request->name,
        ]);
        $customer = Customer::create([
            'stripe_id' => $customer->id,
            'name' => $request->name,
            'last_name' => $request->last_name,
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
