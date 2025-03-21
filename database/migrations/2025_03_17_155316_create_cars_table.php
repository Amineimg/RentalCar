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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references("id")->on("categories")->onDelete("cascade");

            $table->unsignedBigInteger('carmodel_id')->nullable();
            $table->foreign('carmodel_id')->references("id")->on("carmodels")->onDelete("cascade");
            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id')->references("id")->on("locations")->onDelete("cascade");
            $table->integer('status')->default(0);
            $table->integer('featured')->default(0);
            $table->string('features', 255)->nullable();
            $table->string('highlights', 255)->nullable();
            $table->string('services', 255)->nullable();
            $table->string('prices', 255)->nullable();
            $table->string('fees', 255)->nullable();
            $table->double('d_1')->nullable();
            $table->integer('price_per_night')->default(0);
            $table->double('d_10')->default(0);
            $table->double('d_11')->default(0);
            $table->tinyInteger('promo')->nullable()->default(0);
            $table->integer('franchise');
            $table->tinyInteger('full_fuel');
            $table->integer('passengers_number')->default(0);
            $table->integer('doors')->nullable();
            $table->integer('suitcases')->nullable();
            $table->tinyInteger('airconditioner')->nullable();
            $table->string('transmission', 50)->nullable()->default('0');
            $table->string('carburant', 50)->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('alias', 255);
            $table->integer('listing_order')->nullable()->default(100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
