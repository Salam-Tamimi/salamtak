<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            // Remove existing unique constraint
            $table->dropUnique(['day_of_week', 'doctor_id']);

            // Add the 'day_of_week' column if it doesn't exist
            if (!Schema::hasColumn('doctor_schaduales', 'day_of_week')) {
                $table->string('day_of_week');
            }

            // Add new unique constraint for the combination of 'day_of_week' and 'doctor_id'
            $table->unique(['day_of_week', 'doctor_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        DB::statement('ALTER TABLE doctor_schaduales DROP INDEX doctor_schaduales_day_of_week_unique');

        Schema::table('doctor_schaduales', function (Blueprint $table) {
            // If you want to reverse the addition of the 'day_of_week' column, you can uncomment the following line
            // $table->dropColumn('day_of_week');

            // Recreate the unique constraint
            $table->unique(['day_of_week', 'doctor_id']);
        });
    }
};
