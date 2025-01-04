<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShippingColumnsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('shipping_type')->nullable(); // Shipping type
            $table->decimal('shipping_fees_us', 8, 2)->nullable(); // US shipping fees
            $table->decimal('shipping_fees_can', 8, 2)->nullable(); // Canada shipping fees
            $table->string('free_shipping_label')->nullable(); // Free shipping label
            $table->string('paid_shipping_label')->nullable(); // Paid shipping label
            $table->decimal('price_canada', 8, 2)->nullable(); // Price for Canada
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('shipping_type');
            $table->dropColumn('shipping_fees_us');
            $table->dropColumn('shipping_fees_can');
            $table->dropColumn('free_shipping_label');
            $table->dropColumn('paid_shipping_label');
            $table->dropColumn('price_canada');
        });
    }
}
