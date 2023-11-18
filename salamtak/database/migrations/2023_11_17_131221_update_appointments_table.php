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
        //     // Add user_id column as required
        //     $table->unsignedBigInteger('user_id');

        //     // Add foreign key constraint
        //     $table->foreign('user_id')
        //         ->references('id')
        //         ->on('users')
        //         ->onDelete('cascade');
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
        //     // Remove foreign key constraint
        //     $table->dropForeign(['user_id']);

        //     // Drop user_id column
        //     $table->dropColumn('user_id');
        // });
    }
};
