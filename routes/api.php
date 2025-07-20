<?php

use Illuminate\Support\Facades\Route;

Route::prefix('warehouses')->group(function () {
    Route::get('/', App\Http\Controllers\Api\Warehouse\IndexController::class);
});

Route::prefix('products')->group(function () {
    Route::get('/', App\Http\Controllers\Api\Product\IndexController::class);
});

Route::prefix('orders')->group(function () {
    Route::get('/', App\Http\Controllers\Api\Order\IndexController::class);
});
