<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(App\Models\Order::class, 'order_id')
                ->constrained('orders')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignIdFor(App\Models\Product::class, 'product_id')
                ->constrained('products')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->integer('count');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
