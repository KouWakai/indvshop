<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Auth;

class OrderController extends Controller
{
    public function store()
    {
        $isLogin = Auth::check();

        $data = request();

        $total = intval(\Cart::total());

        if($isLogin)
        {
            $order = auth()->user()->order()->create([
                'payment' => $data['paymentmethod'],
                'paid' => 0,
                'total' => $total,
            ]);
        }else
        {
            $order = Order::create([
                'payment' => $data['paymentmethod'],
                'paid' => 0,
                'total' => $total,
                'username' => $data['username'],
                'email' => $data['email'],
                'prefecture' => $data['prefecture'],
                'address1' => $data['address1'],
                'address2' => $data['address2'],
                'address3' => $data['address3'],
                'phone' => $data['phone'],
            ]);
        }

        $cartitems = \Cart::content();

        foreach($cartitems as $row)
        {
            $order->product()->attach($row->id, ['quantity' => $row->qty]);
        }

        \Cart::destroy();

        return view('order.store');
    }
}
