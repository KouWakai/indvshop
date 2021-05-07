<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store()
    {
        $data = request();

        $total = intval(\Cart::total());

        $order = auth()->user()->order()->create([
            'payment' => 'クレジット',
            'paid' => 0,
            'total' => $total,
        ]);

        $cartitems = \Cart::content();

        foreach($cartitems as $row)
        {
            $order->product()->attach($row->id, ['quantity' => $row->qty]);
        }

        return view('order.store');
    }
}
