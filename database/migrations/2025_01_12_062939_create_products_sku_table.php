<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsSkuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_sku', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pid'); // Foreign key or product ID
            $table->string('specification_condition')->nullable(); // Nullable string column
            $table->string('sku_code')->unique(); // Unique SKU code
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
        Schema::dropIfExists('products_sku');
    }
}
