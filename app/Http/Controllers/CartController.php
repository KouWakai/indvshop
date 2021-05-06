<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;


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

    public function show()
    {
        $isLogin = Auth::check();

        if($isLogin)
        {
            $user = auth()->user();
            return view('cart.checkout', compact('user'));
        }else
        {
            return view('cart.login_checkout');
        }
    }
}
