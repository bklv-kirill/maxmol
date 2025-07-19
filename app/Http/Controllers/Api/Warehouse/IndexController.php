<?php

namespace App\Http\Controllers\Api\Warehouse;

use App\Http\Controllers\Controller;
use App\Http\Resources\Warehouse\WarehouseCollection;
use App\Models\Warehouse;

class IndexController extends Controller
{
    public function __invoke(): WarehouseCollection
    {
        $warehouses = Warehouse::query()
            ->get();

        return new WarehouseCollection($warehouses);
    }
}
