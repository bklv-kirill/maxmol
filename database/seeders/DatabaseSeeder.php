<?php

namespace Database\Seeders;

use App\Models\Product;
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
    }
}
