<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrackingFieldsToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->date('estimated_delivery_date')->nullable()->after('updated_at'); // Add after existing column
            $table->string('carrier_name')->nullable()->after('estimated_delivery_date');
            $table->string('tracking_number')->nullable()->after('carrier_name');
            $table->string('tracking_url')->nullable()->after('tracking_number');
            $table->string('shipping_status')->default('Pending')->after('tracking_url');
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
            $table->dropColumn('estimated_delivery_date');
            $table->dropColumn('carrier_name');
            $table->dropColumn('tracking_number');
            $table->dropColumn('tracking_url');
            $table->dropColumn('shipping_status');
        });
    }
}
