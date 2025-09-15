<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void
    {
        Schema::create('products',function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->integer('stock')->unsigned();
            $table->decimal('price',10,2);
            $table->enum('size',['s','l','m'])->default('m');
            $table->boolean('breakable')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

    }
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
