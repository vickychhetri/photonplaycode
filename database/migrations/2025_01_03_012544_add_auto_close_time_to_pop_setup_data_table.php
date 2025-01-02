<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAutoCloseTimeToPopSetupDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pop_setup_data', function (Blueprint $table) {
            $table->integer('auto_close_time_in_second')->default(60)->after('redirect_url'); // Default to 60 seconds
            $table->integer('auto_come_time_in_second')->default(1)->after('auto_close_time_in_second');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pop_setup_data', function (Blueprint $table) {
            $table->dropColumn('auto_close_time_in_second');
            $table->dropColumn('auto_come_time_in_second');
        });
    }
}
