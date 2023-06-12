<?php

namespace App\Mail;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $body;
    public  $order;

    public function __construct($body)
    {
        $this->body = $body;
        $this->order=Order::with(['orderedProducts','user'])->find($body['id']);
        if(!isset($order)){
            return false;
        }
        foreach($order->orderedProducts as $prd){
            $prd["title"]=Product::find($prd->product_id)->title;
            $prd["cover_image"]=Product::find($prd->product_id)->cover_image;
        }

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.order-status-mail')->with('body', $this->body)->with('order', $this->order);
    }
}
