<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterInquiriesAddUrlStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inqueries', function (Blueprint $table) {
            $table->text('url')->nullable();
            $table->enum('status',['Open','Closed'])->default('Open');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inqueries', function (Blueprint $table) {
            //
        });
    }
}
