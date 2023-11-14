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
        Schema::table('appointments', function (Blueprint $table) {
            // Drop the existing date column
            $table->dropColumn('date');

            // Add a new column for day_of_week
            $table->string('day_of_week');

            // You can also set a default value if needed
            // $table->string('day_of_week')->after('time')->default('Monday');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            // Reverse the changes made in the "up" method
            $table->date('date')->after('time');
            $table->dropColumn('day_of_week');
        });
    }
};
