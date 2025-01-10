<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressLinesToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('billing_address_line_2')->nullable()->after('address'); // Adjust column order if needed
            $table->string('shipping_address_line_2')->nullable()->after('billing_address_line_2'); // Adjust column order if needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('billing_address_line_2');
            $table->dropColumn('shipping_address_line_2');
        });
    }
}
