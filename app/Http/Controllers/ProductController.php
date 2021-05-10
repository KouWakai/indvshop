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
        return view('product.show', ['product' => Product::findOrFail($id)]);
    }
}
