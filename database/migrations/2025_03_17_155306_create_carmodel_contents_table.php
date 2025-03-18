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
        Schema::create('carmodel_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carmodel_id')->index('carmodel_contents_category_id_index');
            $table->integer('language_id');
            $table->string('name', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carmodel_contents');
    }
};
