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
            $table->increments('id');
            $table->string('car_name', 200)->nullable();
            $table->integer('completed')->default(0);
            $table->integer('status')->default(0);
            $table->integer('car_id')->index();
            $table->integer('user_id')->nullable()->index();
            $table->integer('owner_id')->default(0);
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
