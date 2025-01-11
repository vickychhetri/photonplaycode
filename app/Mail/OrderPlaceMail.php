<?php

namespace App\Mail;

use Barryvdh\DomPDF\PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlaceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $pdfPath;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$pdfPath)
    {
        $this->data = $data;
        $this->pdfPath = $pdfPath;
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
            })->attach($this->pdfPath, [
                'as' => 'Order_Invoice_' . $this->data["order_number"] . '.pdf', // Custom file name
                'mime' => 'application/pdf', // MIME type
            ]);;

        return $this->markdown('mail.order-place-mail')->with('data', $this->data);
    }
}
