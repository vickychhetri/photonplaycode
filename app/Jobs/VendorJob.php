<?php

namespace App\Jobs;

use App\Mail\VendorMail;
use App\Models\EmailAddress;
use App\Models\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class VendorJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // $mail = config('services.vendor.email');
//        $mail = ['info@photonplay.com', 'Pervez.ali@photonplay.com', 'larry@photonplay.com','bksingh@photonplay.com','Afzaal.habibi@photonplay.com','anjali.giri.psi@gmail.com','satinderpanesar03@gmail.com','vickychhetri4@gmail.com'];
        $mail = EmailAddress::where('status', 'act')
            ->where('code', 'general')
            ->pluck('email')
            ->toArray();

        Mail::to($mail)->send( new VendorMail($this->message));
    }
}
