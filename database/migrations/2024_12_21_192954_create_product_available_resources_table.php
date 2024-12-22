<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductAvailableResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_available_resources', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('filename')->nullable(); // URL or file path
            $table->string('folder')->nullable();
            $table->string('order')->nullable();
            $table->enum('type', ['pdf', 'mp4', 'youtube', 'image'])->nullable();
            $table->boolean('status')->default(1); // 1 for active, 0 for inactive
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('product_available_resources');
    }
}
