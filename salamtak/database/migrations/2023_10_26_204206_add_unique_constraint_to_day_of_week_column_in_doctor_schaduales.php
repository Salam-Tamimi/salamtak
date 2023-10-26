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
        Schema::table('doctor_schaduales', function (Blueprint $table) {
            $table->unique('day_of_week');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor_schaduales', function (Blueprint $table) {
            $table->dropUnique('doctor_schaduales_day_of_week_unique');
        });
    }
};
