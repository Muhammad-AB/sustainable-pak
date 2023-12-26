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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();

            $table->string('description', 300);
            $table->unsignedBigInteger('category_id');
            $table->string('product1', 255)->nullable();
            $table->string('product2', 255)->nullable();
            $table->string('product3', 255)->nullable();
            $table->string('main_link', 255);
            $table->string('web_link', 255)->nullable();
            $table->string('fb_link', 255)->nullable();
            $table->string('insta_link', 255)->nullable();
            $table->string('twitter_link', 255)->nullable();
            $table->string('lin_link', 255)->nullable();
            $table->unsignedBigInteger('user_id')->unique();
            $table->timestamps();

            
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
