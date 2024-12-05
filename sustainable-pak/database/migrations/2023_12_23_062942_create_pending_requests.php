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
        Schema::create('pending_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('description', 2000);
            $table->unsignedBigInteger('category_id');
            $table->string('main_link', 255);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pending_requests');
    }
};
