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
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('featured')->default(0);
            $table->integer('order')->default(0);
            $table->string('featured_image', 255)->nullable();
            $table->string('home_image', 255)->nullable();
            $table->string('alias', 255);
            $table->double('tarif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
