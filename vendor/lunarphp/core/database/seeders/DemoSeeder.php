<?php

namespace Lunar\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Lunar\Models\Attribute;
use Lunar\Models\AttributeGroup;
use Lunar\Models\Channel;
use Lunar\Models\ProductType;

class DemoSeeder extends Seeder
{
    protected array $toTruncate = ['channels', 'attributes', 'attribute_groups', 'product_types'];

    /**
     * Seed the demo data.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        foreach ($this->toTruncate as $table) {
            DB::table(config('lunar.table_prefix').$table)->truncate();
        }

        Schema::enableForeignKeyConstraints();

        //======== DATA

        Channel::factory()->create([
            'name' => 'Webstore',
            'handle' => 'webstore',
            'default' => true,
            'url' => 'http://mystore.test',
        ]);

        ProductType::factory()
            ->has(
                Attribute::factory()->for(AttributeGroup::factory())->count(1)
            )
            ->create([
                'name' => 'Bob',
            ]);
    }
}
