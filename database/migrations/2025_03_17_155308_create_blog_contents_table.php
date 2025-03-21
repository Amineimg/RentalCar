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
        Schema::create('blog_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('content')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->unsignedBigInteger('blog_id')->nullable();
            $table->foreign('blog_id')->references("id")->on("blogs")->onDelete("cascade");
            $table->unsignedBigInteger('language_id')->nullable();
            $table->foreign('language_id')->references("id")->on("languages")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_contents');
    }
};
