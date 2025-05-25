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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // název produktu
            $table->text('description'); // popis produktu
            $table->decimal('price', 8, 2); // cena
            $table->string('sku')->unique()->nullable(); // SKU, může být prázdné
            $table->integer('in_stock')->nullable(); // množství na skladě, nepovinné
            $table->string('image')->nullable(); // obrázek produktu, nepovinný
            $table->timestamps(); // created_at a updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
