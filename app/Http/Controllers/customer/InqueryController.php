<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Mail\SendInquiryEmail;
use App\Models\Inquery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class InqueryController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'first_name'=>'max:50',
            'last_name'=>'max:50'
        ]);

        if($validator->fails()){

            return redirect($request->url.'#inquiry')->with('error',  $validator->errors()->first());
        }
       $data_in=Inquery::create($request->except('_token'));

        $inquiry = new SendInquiryEmail($data_in);
//        sales@photonplay.com
        Mail::to('vickychhetri4@gmail.com')->send($inquiry);

       return redirect(route('customer.show_thank_you_page'))->with('success', 'Inquiry successfully submitted.');
    }
}
