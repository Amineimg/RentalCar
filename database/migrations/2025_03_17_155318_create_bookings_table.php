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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('car_name', 200)->nullable();
            $table->integer('completed')->default(0);
            $table->integer('status')->default(0);
            $table->integer('car_id')->index();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references("id")->on("users")->onDelete("cascade");
            $table->unsignedBigInteger('owner_id')->nullable()->default(0);
            $table->foreign('owner_id')->references("id")->on("owners")->onDelete("cascade");
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('guest_number')->nullable();
            $table->float('total');
            $table->tinyInteger('payment_method')->default(0)->comment('0 cash - 1 credit card');
            $table->float('franchise');
            $table->integer('full_fuel')->nullable();
            $table->text('services')->nullable();
            $table->text('client_data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
