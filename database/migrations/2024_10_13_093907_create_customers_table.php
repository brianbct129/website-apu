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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->string('password');
            $table->string('phone_number');
            $table->unsignedBigInteger('group_discount_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('group_discount_id')->references('id')->on('discount_groups');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
