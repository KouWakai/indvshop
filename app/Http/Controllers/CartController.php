<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class CartController extends Controller
{
    public function store(){
        $product = Product::find(request()->input('id'));

        \Cart::add($product->id, $product->caption, 1, $product->price);

        return view('cart.index');
    }
}
