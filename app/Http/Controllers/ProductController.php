<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($id){
        return view('product.show', ['product' => Product::findOrFail($id)]);
    }
}
