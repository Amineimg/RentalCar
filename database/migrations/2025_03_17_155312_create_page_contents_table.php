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
        Schema::create('page_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->index();
            $table->integer('language_id')->index();
            $table->string('title', 255);
            $table->text('content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_contents');
    }
};
