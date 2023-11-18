<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('appointments', function (Blueprint $table) {
        //     // Remove the existing 'time' column
        //     $table->dropColumn('time');

        //     // Add new columns for start_time and end_time
        //     $table->time('start_time');
        //     $table->time('end_time');

        //     // You can add other necessary modifications here
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('appointments', function (Blueprint $table) {
        //     // Reverse the changes made in the 'up' method
        //     $table->time('time');
        //     $table->dropColumn('start_time');
        //     $table->dropColumn('end_time');
        // });
    }
};
