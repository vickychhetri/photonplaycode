<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContactDetailsInVendor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('fax_number')->nullable();
            $table->string('website')->nullable();
            $table->integer('year_of_business');
            $table->integer('year_of_business_present_years');
            $table->integer('year_of_business_present_location');
            $table->integer('total_number_of_locations');
            $table->string('type_of_ownership');
            $table->string('president')->nullable();
            $table->string('sale_marketing_manager')->nullable();
            $table->string('accounting_manager')->nullable();
            $table->string('production_manager')->nullable();
            $table->string('installation_manager')->nullable();
            $table->string('service_manager')->nullable();
            $table->string('know_about_tickerplay')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendors', function (Blueprint $table) {
            //
        });
    }
}
