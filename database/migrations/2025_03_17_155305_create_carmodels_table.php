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
        Schema::create('carmodels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order')->default(0);
            $table->integer('carmake_id')->default(0)->index();
            $table->string('alias', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carmodels');
    }
};
