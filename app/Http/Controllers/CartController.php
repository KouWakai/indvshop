<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class CartController extends Controller
{
    public function store(){
        $product = request()->input('product');

        \Cart::add($product[0], $product[1], 1, $product[2]);

        return view('cart.index');
    }
}
