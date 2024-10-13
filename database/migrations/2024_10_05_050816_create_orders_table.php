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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->unsignedBigInteger('customer_id');
            $table->decimal('total_amount', 10, 2);
            $table->string('order_status');
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->unsignedBigInteger('shipping_id')->nullable();
            $table->unsignedBigInteger('voucher_id')->nullable();
            $table->unsignedBigInteger('tax_id')->nullable();
            $table->unsignedBigInteger('shipping_cost_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('shipping_id')->references('id')->on('shippings');
            $table->foreign('voucher_id')->references('id')->on('vouchers');
            $table->foreign('tax_id')->references('id')->on('taxes');
            $table->foreign('shipping_cost_id')->references('id')->on('shipping_costs');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');

    }
};
