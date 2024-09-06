<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Lunar\Base\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create($this->prefix.'shipping_exclusions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('shipping_exclusion_list_id')->constrained(
                $this->prefix.'shipping_exclusion_lists'
            );
            $table->morphs('purchasable', 'shipping_exclusions_purchasable_type_purchasable_id_index');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists($this->prefix.'shipping_exclusions');
    }
};
