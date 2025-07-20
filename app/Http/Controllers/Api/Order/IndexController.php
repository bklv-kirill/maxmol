<?php

namespace App\Http\Controllers\Api\Order;

use App\Http\Controllers\Controller;
use App\Http\Resources\Order\OrderCollection;
use App\Models\Order;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request): OrderCollection
    {
        $orders = Order::query()
            ->get();

        return new OrderCollection($orders);
    }
}
