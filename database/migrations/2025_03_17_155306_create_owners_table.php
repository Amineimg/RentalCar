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
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references("id")->on("users");
            $table->unsignedInteger('points')->default(0);
            $table->unsignedInteger('active_balance')->default(0);
            $table->unsignedInteger('pending_balance')->default(0);
            $table->string('first_name', 30)->nullable();
            $table->string('last_name', 30)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('address', 30)->nullable();
            $table->string('city', 30)->nullable();
            $table->string('state', 30)->nullable();
            $table->string('country', 30)->nullable();
            $table->string('zip', 10)->nullable();
            $table->string('company', 30)->nullable();
            $table->string('logo', 150)->default('no_image.jpg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
