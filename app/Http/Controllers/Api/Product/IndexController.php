<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductCollection;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke(): ProductCollection
    {
        $products = Product::query()
            ->get();

        return new ProductCollection($products);
    }
}
