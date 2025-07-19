<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Stock;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Product::factory()
            ->count(50)
            ->create();

        Warehouse::factory()
            ->count(10)
            ->create();

        $warehouses = Warehouse::query()
            ->get();

        foreach ($warehouses as $warehouse) {
            $products = Product::query()
                ->inRandomOrder()
                ->limit(10)
                ->get();

            foreach ($products as $product) {
                Stock::query()->create([
                    'product_id' => $product->id,
                    'warehouse_id' => $warehouse->id,
                    'stock' => rand(10, 100),
                ]);
            }
        }
    }
}
