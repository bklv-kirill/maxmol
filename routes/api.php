<?php

use Illuminate\Support\Facades\Route;

Route::prefix('warehouses')->group(function () {
    Route::get('/', App\Http\Controllers\Api\Warehouse\IndexController::class);
});


