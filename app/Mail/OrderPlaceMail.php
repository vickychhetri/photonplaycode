<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlaceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->data["order_number"].' Order Confirmation – Thank You for Your Purchase!';

        return $this->markdown('mail.order-place-mail')
            ->with('data', $this->data)
            ->withSwiftMessage(function ($message) use ($subject) {
                $message->setSubject($subject);
            });

        return $this->markdown('mail.order-place-mail')->with('data', $this->data);
    }
}
