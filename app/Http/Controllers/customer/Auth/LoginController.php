<?php

namespace App\Http\Controllers\customer\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\Cart;
use App\Models\Country;
use App\Models\Customer;
use Illuminate\Auth\Events\Validated;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
            'password' => 'required',
        ], [
            'email.required' => 'The email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.exists' => 'Account does not exist. Please enter correct login details or sign up',
            'password.required' => 'The password field cannot be empty.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $attemptsKey = 'login_attempts_' . $request->email;
        // Check if the user has exceeded the attempt limit
        if (Cache::get($attemptsKey, 0) >= 5) {
            return redirect()->back()->with('error', 'Too many login attempts. Please try again in few minute.');
        }


        $credentials = $request->only('email', 'password');
        if (!Auth::guard('customer')->attempt($credentials)) {
            $return_msg="You have entered invalid credentials";

            // Increment the login attempts
            Cache::increment($attemptsKey);
            Cache::put($attemptsKey, Cache::get($attemptsKey), now()->addMinutes(1));

            $cust_may_guest=Customer::where('email',$request->email)->first();

            if($cust_may_guest->is_guest){
                $return_msg ="Hi Guest, Please reset your password to login.";
            }

            return redirect()->back()->with('error',$return_msg);
        }

        $userLogged=Auth::guard('customer')->user();
        if($userLogged){
            if($userLogged->is_block){
                return redirect()->back()->with('error', "Your Account Blocked !");
            }
        }


        $session = Session::put('user', Auth::guard('customer')->user());

        $cust_may_guest = Customer::where('email', $request->email)->first();
        if ($cust_may_guest) {
            $cust_may_guest->update(['is_guest' => false]);
        }

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

        $countries = Country::all();
        return view('customer.auth.register',compact('countries'));
    }

    public function register(Request $request)
    {
        $sessionId = Session::getId();
        $stripe = Stripe\Stripe::setApiKey(config('services.stripe.stripe_secret'));

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'last_name'=>'nullable|string|max:255',
            'phone_code'=>'required',
            'phone_number'=>'required|string|max:255',
            'email' => 'required|email',
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

        $cust_may_guest = Customer::where('email', $request->email)->first();
        if ($cust_may_guest) {
            if($cust_may_guest->is_guest){
                $return_msg ="Hi Guest, Your account already created. Please reset your password to login.";
            }else {
                $return_msg="This email address is already registered. Please try logging in or use a different email address.";
            }
            return redirect()->back()->with('error', $return_msg);
        }

        $customer = \Stripe\Customer::create([
            'email' => $request->email,
            'name' => $request->name,
        ]);
        $customer = Customer::create([
            'stripe_id' => $customer->id,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'phone_code' => $request->phone_code,
            'phone_number' => $request->phone_number,
            'guest' => false,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Mail::to($request->email)->send(new WelcomeMail($customer));

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
