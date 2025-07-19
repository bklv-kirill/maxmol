<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(\App\Models\Product::class, 'product_id')
                ->constrained('products')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Warehouse::class, 'warehouse_id')
                ->constrained('warehouses')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->integer('stock');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
