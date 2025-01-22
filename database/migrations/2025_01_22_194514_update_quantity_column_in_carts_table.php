<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateQuantityColumnInCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('carts', function (Blueprint $table) {
////            $table->integer('quantity')->default(1)->nullable(false)->change();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('carts', function (Blueprint $table) {
////            $table->string('quantity', 255)->nullable()->change();
//        });
    }
}
