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
        Schema::create('post_category', function (Blueprint $table) {
    $table->id('PostCategoryID');
    $table->unsignedBigInteger('PostID');
    $table->foreign('PostID')->references('PostID')->on('posts')->onDelete('cascade');
    $table->unsignedBigInteger('CategoryID');
    $table->foreign('CategoryID')->references('CategoryID')->on('categories')->onDelete('cascade');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_category');
    }
};
