<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('type')->nullable()->default(1);
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('sales_email',100)->nullable();
            $table->string('sales_phone',15)->nullable();
            $table->string('support_email',100)->nullable();
            $table->string('support_phone',15)->nullable();
            $table->string('company_location')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_phone',15)->nullable();
            $table->string('company_email',100)->nullable();
            $table->decimal('gst',5,2)->nullable();
            $table->string('shipping_time')->nullable();

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
        Schema::dropIfExists('settings');
    }
}
