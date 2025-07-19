<?php

namespace App\Http\Resources\Stock;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'product_id' => $this->product_id,
            'product_name' => $this->product->name,
            'warehouse_id' => $this->warehouse_id,
            'warehouse_name' => $this->warehouse->name,
            'stock' => $this->stock
        ];
    }
}
