<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailNotificationJob;
use App\Models\Customer;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NotificationsController extends Controller
{
    public function notifications_form(){
        return view("notification.notification-form");
    }
    public function user_emails(Request $request){
        $records= Customer::select('email')
            ->where('email','LIKE','%'.$request->search.'%')->get();
        return response()->json(
            ["emails"=>$records
            ],200);
    }

    public function send(Request $request){
        $request->validate([
            'subject' => 'required',
            'body'=>'required',
        ]);

        $record= new Notification;
        $record->subject=$request->subject;
        $record->body=$request->body;
        $record->save();
        //start and handle job dispatch ->onQueue('notifications')
        $job = (new SendEmailNotificationJob($record));
        dispatch($job);

        Session::flash('notification_sent','1');
        return redirect()->back();
    }



}
