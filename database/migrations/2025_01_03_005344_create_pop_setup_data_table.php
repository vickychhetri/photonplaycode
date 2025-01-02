<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopSetupDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pop_setup_data', function (Blueprint $table) {
            $table->id();
            $table->string('sound_url')->nullable(); // URL for the popup sound
            $table->string('image_icon')->nullable(); // Image URL for the icon
            $table->string('title')->nullable(); // Popup title
            $table->text('description')->nullable(); // Popup description
            $table->string('button_text')->nullable(); // Text for the button
            $table->string('redirect_url')->nullable(); // URL to redirect when button is clicked
            $table->boolean('status')->default(1); // Status (active or inactive)
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
        Schema::dropIfExists('pop_setup_data');
    }
}
