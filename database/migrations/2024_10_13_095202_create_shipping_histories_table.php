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
        Schema::create('shipping_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->dateTime('status_update_date');  // Tanggal pembaruan status
            $table->string('status');  // Status pengiriman (misal: dikirim, tiba, dll.)
            $table->string('location')->nullable();  // Lokasi terakhir pengiriman (jika ada)
            $table->text('notes')->nullable();  // Catatan tambahan (opsional)
            $table->timestamps();
        
            // Foreign key ke tabel orders
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_histories');
    }
};
