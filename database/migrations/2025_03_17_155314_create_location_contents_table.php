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
            $table->id();
            $table->string('location', 255);
            $table->text('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id')->references("id")->on("locations")->onDelete("cascade");
            $table->unsignedBigInteger('language_id')->nullable();
            $table->foreign('language_id')->references("id")->on("languages")->onDelete("cascade");
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
