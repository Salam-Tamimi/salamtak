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
        Schema::table('hospital_departments', function (Blueprint $table) {
            // Drop the existing foreign key constraint
            $table->dropForeign(['hospital_id']);
    
            // Alter the foreign key reference to 'users' table
            $table->foreign('hospital_id')
                ->references('id')
                ->on('users') // Change this line to reference 'users'
                ->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hospital_departments', function (Blueprint $table) {
            //
        });
    }
};
