<?php

namespace App\Http\Resources\OrderItem;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class OrderItemCollection extends ResourceCollection
{
    public $collects = OrderItemResource::class;

    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
