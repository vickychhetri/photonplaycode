<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSpecializationPriceCaToProductSpecializationOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_spcialization_options', function (Blueprint $table) {
            $table->decimal('specialization_price_ca', 8, 2)->after('specialization_price')->nullable()->default(0); // Add decimal column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_spcialization_options', function (Blueprint $table) {
            $table->dropColumn('specialization_price_ca');
        });
    }
}
