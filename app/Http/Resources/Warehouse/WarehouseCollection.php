<?php

namespace App\Http\Resources\Warehouse;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class WarehouseCollection extends ResourceCollection
{
    public $collects = WarehouseResource::class;

    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
