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
            $table->id();
            $table->unsignedBigInteger('car_id')->nullable();
            $table->foreign('car_id')->references("id")->on("cars")->onDelete("cascade");
            $table->unsignedBigInteger('language_id')->nullable();
            $table->foreign('language_id')->references("id")->on("languages")->onDelete("cascade");
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
