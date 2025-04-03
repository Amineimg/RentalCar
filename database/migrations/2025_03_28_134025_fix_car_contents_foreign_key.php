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
        Schema::table('car_contents', function (Blueprint $table) {
            // Drop the incorrect foreign key constraint
            $table->dropForeign(['car_id']);

            // Add the correct foreign key reference to the 'cars' table
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('car_contents', function (Blueprint $table) {
            //
        });
    }
};
