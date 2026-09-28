<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['customer', 'product'])
            ->latest('id')
            ->paginate(10);

        return view('orders.index', compact('orders'));
    }
}
