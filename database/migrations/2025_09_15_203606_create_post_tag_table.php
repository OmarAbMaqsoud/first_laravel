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
        Schema::create('post_tag', function (Blueprint $table) {
    $table->id('PostTagID');

    $table->unsignedBigInteger('PostID');
    $table->foreign('PostID')->references('PostID')->on('posts')->onDelete('cascade');
    $table->unsignedBigInteger('TagID');
    $table->foreign('TagID')->references('TagID')->on('tags')->onDelete('cascade');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
};
