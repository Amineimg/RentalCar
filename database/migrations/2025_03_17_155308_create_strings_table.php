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
        Schema::create('strings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 30);
            $table->integer('default')->default(0);
            $table->longText('string');
            $table->string('code', 6);
            $table->integer('is_backend')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strings');
    }
};
