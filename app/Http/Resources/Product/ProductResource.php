<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Stock\StockCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'stocks' => new StockCollection($this->stocks),
        ];
    }
}
