<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Mail\SendInquiryEmail;
use App\Models\Inquery;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class InqueryController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'first_name'=>'max:50',
            'last_name'=>'max:50',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        if($validator->fails()){

            return redirect($request->url.'#inquiry')->with('error',  $validator->errors()->first());
        }
       $data_in=Inquery::create($request->except('_token'));

        $inquiry = new SendInquiryEmail($data_in);
//        sales@photonplay.com
        $recipients = ['info@photonplay.com', 'Pervez.ali@photonplay.com', 'larry@photonplay.com','bksingh@photonplay.com','Afzaal.habibi@photonplay.com'];
        Mail::to($recipients)->send($inquiry);
//        Mail::to('Pervez.ali@photonplay.com')->send($inquiry);
//        Mail::to('larry@photonplay.com')->send($inquiry);
//        Mail::to('bksingh@photonplay.com')->send($inquiry);


       return redirect(route('customer.show_thank_you_page'))->with('success', 'Inquiry successfully submitted.');
    }
}
