<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function get_orders()
    {
        return Order::all();
    }

    public function get_order(Order $order)
    {
        return $order;
    }

    public function get_order_with_details(Order $order)
    {
        return $order->load('orderDetail');
    }
}
