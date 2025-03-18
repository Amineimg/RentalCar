<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('location_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('location_id')->index();
            $table->integer('language_id');
            $table->string('location', 255);
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_contents');
    }
};
