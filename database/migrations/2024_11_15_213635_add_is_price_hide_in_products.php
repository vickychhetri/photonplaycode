<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsPriceHideInProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('products', function (Blueprint $table) {
//            $table->tinyInteger('is_price_hide')->default(null)->after('price');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('products', function (Blueprint $table) {
//            $table->dropColumn('is_price_hide');
//        });
    }
}
