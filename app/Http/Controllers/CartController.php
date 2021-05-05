<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class CartController extends Controller
{
    public function index(){
        return view('cart.index');
    }

    public function store(){
        $product = Product::find(request()->input('id'));

        \Cart::add(['id' => $product->id, 'name' => $product->caption, 'qty' => 1, 'price' => $product->price, 'weight' => 0,'options' => ['image' => $product->image]]);

        return view('cart.index');
    }

    public function destroy($rowId, Request $request){
        if($request->get('empty'))
        {
            \Cart::destroy();

            return redirect('/cart');
        }else
        {
            \Cart::remove($rowId);
        }
        return redirect('/cart');
    }
}
