<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
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

        Order::factory()
            ->count(50)
            ->create();

        $orders = Order::query()
            ->get();

        foreach ($orders as $order) {
            $products = Product::query()
                ->inRandomOrder()
                ->limit(3)
                ->get();

            foreach ($products as $product) {
                OrderItem::query()->create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                ]);
            }
        }
    }
}
