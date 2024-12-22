<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCodeColumnToProductsSpecializationSpecializationOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Adding the 'code' column to the 'products' table
        Schema::table('products', function (Blueprint $table) {
            $table->string('code')->unique()->nullable()->after('id'); // Adjust 'after' as needed
        });

        // Adding the 'code' column to the 'specialization' table
        Schema::table('specilizations', function (Blueprint $table) {
            $table->string('code')->unique()->nullable()->after('id'); // Adjust 'after' as needed
        });

        // Adding the 'code' column to the 'specialization_options' table
        Schema::table('specialization_options', function (Blueprint $table) {
            $table->string('code')->unique()->nullable()->after('id'); // Adjust 'after' as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Removing the 'code' column from the 'products' table
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('code');
        });

        // Removing the 'code' column from the 'specialization' table
        Schema::table('specilizations', function (Blueprint $table) {
            $table->dropColumn('code');
        });

        // Removing the 'code' column from the 'specialization_options' table
        Schema::table('specialization_options', function (Blueprint $table) {
            $table->dropColumn('code');
        });

    }
}
