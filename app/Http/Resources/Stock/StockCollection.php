<?php

namespace App\Http\Resources\Stock;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StockCollection extends ResourceCollection
{
    public $collects = StockResource::class;

    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
