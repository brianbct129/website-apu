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
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // Primary key, auto-incrementing
            $table->string('name');  // Nama pengguna
            $table->string('email')->unique();  // Email pengguna, harus unik
            $table->timestamp('email_verified_at')->nullable();  // Verifikasi email, nullable jika tidak diverifikasi
            $table->string('password');  // Kata sandi
            $table->rememberToken();  // Token untuk "remember me" feature
            $table->timestamps();  // Created_at dan updated_at
            $table->softDeletes();  // Soft delete untuk mengarsip pengguna, jika diperlukan
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
