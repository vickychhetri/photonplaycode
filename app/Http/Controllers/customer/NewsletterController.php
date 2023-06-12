<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function newsletter(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if($validator->fails()){
            return redirect($request->url.'#subscribed')->with('error',  $validator->errors()->first());
        }
            Newsletter::updateOrCreate([
            'email' => $request->email
        ]);

        return redirect($request->url.'#subscribed')->with('success', 'Newsletter successfully subscribed');
    }
}
