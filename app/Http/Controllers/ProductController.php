<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('created_at','desc')->paginate(9);

        return view('product.index', compact('product'));
    }

    public function show($id){
        $product = Product::findOrFail($id);

        return response()->json(['product' => $product]);
    }
}
