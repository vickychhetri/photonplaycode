<?php

namespace App\Http\Controllers\customer\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\ResetPasswordJob;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PasswordController extends Controller
{
    public function forepassPasswordForm()
    {

        $loginuser_validate=Session::get('user');
        if($loginuser_validate){
            return redirect("radar-speed-signs");
        }
        return view('customer.auth.forgot_password_form');
    }

    public function forgotPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:customers'
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error',  $validator->errors()->first());
        }
        $customer= Customer::select('name')->where('email',$request->email)->first();
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        $data = [
            'token' => $token,
            'name'=>$customer->name,
            'email' => $request->email,
            'created_at' => now(),
        ];
        ResetPasswordJob::dispatch($data);
        return redirect()->back()->with('success', "A reset link has been sent to your email. Please check your inbox and click the verification link to reset your password.");
    }

//    public function resetPassword($token)
//    {
//        $user = DB::table('password_resets')->where('token', $token)->first();
//        if ($user) {
//            $email = $user->email;
//            return view('customer.auth.change_password_form', compact('email'));
//        }
//        return redirect()->route('forgot-password')->with('failed', 'Password reset link is expired');
//    }

            public function resetPassword($token)
            {
                $user = DB::table('password_resets')->where('token', $token)->first();
                if ($user) {
                    // Check if the token is older than 15 minutes
                    $tokenCreatedAt = $user->created_at;
                    $currentTime = now();

                    // Check if the token is older than 15 minutes
                    if ($currentTime->diffInMinutes($tokenCreatedAt) > 15) {
                        // Token has expired
                        return redirect()->route('forgot-password')->with('failed', 'Password reset link has expired');
                    }

                    $email = $user->email;
                    return view('customer.auth.change_password_form', compact('email'));
                }

                // If the token doesn't exist
                return redirect()->route('forgot-password')->with('failed', 'Password reset link is invalid');
            }




    public function changePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:customers,email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        $user = Customer::where('email', $request->email)->first();

        if ($user) {
            $user['password'] = Hash::make($request->password);
            $user->save();

            DB::table('password_resets')->where('email', $request->email)->delete();
            notify()->success('Success! password has been changed');
            return redirect()->route('customer.loginForm');
        }
        notify()->success('Failed! something went wrong');
        return redirect()->route('forgot-password');
    }
}
