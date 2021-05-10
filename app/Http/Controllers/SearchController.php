<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function index()
    {
        $keyword = request()->input('keyword');

        $product = Product::orderBy('created_at','desc')->get();

        if(!empty($keyword))
        {
            $result = Product::where('caption', 'like', "%$keyword%")->orderBy('created_at','desc')->paginate(9);
        }else
        {
            $result = Product::orderBy('created_at','desc')->paginate(9);
        }

        return view('search.index', compact('result'));
    }
}
