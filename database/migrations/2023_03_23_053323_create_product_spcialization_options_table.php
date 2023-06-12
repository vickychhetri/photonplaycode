<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSpcializationOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_spcialization_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('specialization_option_id')->nullable();
            $table->string('specialization_price')->nullable();
            $table->foreignId('product_specilizations_id')->nullable();
            $table->foreignId('product_id')->nullable();
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
        Schema::dropIfExists('product_spcialization_options');
    }
}
