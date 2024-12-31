<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnProductInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('product_heading_text')->nullable();
            $table->string('product_breadcrumb_text')->nullable();
            $table->string('pdf_download_text')->nullable();
            $table->text('shipping_text')->nullable();
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
            $table->dropColumn('product_heading_text');
            $table->dropColumn('product_breadcrumb_text');
            $table->dropColumn('pdf_download_text');
            $table->dropColumn('shipping_text');
        });
    }
}
