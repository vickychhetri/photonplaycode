<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('trx_id')->nullable();
            $table->string('order_number')->nullable();
            $table->string('coupon')->nullable();
            $table->string('discounted_amount')->nullable();
            $table->string('cart_subtotal')->nullable();
            $table->string('shipping')->nullable();
            $table->string('gst')->nullable();
            $table->string('grand_total')->nullable();
            $table->string('billing_street')->nullable();
            $table->string('billing_flat_suite')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_country')->nullable();
            $table->string('billing_postcode')->nullable();
            $table->string('address')->nullable();
            $table->text('order_notes')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
