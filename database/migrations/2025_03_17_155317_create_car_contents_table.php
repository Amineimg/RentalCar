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
        Schema::create('car_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id');
            $table->integer('language_id');
            $table->string('name', 255);
            $table->text('description');
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_contents');
    }
};
