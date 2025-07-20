<?php

namespace App\Http\Resources\OrderItem;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'product_name' => $this->product->name,
            'product_price' => $this->product->price,
            'count' => $this->count,
        ];
    }
}
