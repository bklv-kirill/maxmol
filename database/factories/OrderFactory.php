<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'warehouse_id' => Warehouse::query()->inRandomOrder()->first()->id,
            'customer' => fake()->name(),
            'status' => $this->faker->randomElement([
                Order::STATUS_ACTIVE,
                Order::STATUS_COMPLETED,
                Order::STATUS_CANCELLED,
            ])
        ];
    }
}
