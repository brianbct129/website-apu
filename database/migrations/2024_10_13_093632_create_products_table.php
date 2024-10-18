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
            $table->json('image')->nullable();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('discount_group_id')->nullable();
            $table->json('tags')->nullable(); // Store tags as a JSON array
            $table->string('sku')->unique(); // SKU must be unique
            $table->string('barcode')->unique(); // Barcode must be unique
            $table->string('meta_tag_title')->nullable();
            $table->text('meta_tag_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('discount_group_id')->references('id')->on('discount_groups');
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
