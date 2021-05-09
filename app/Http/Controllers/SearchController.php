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
            foreach($product as $key => $prd){
                $data = $prd->where('caption', 'like', "%$keyword%")->get();
            }
            $result = $data;

            return view('search.index', compact('result'));
        }else
        {
            $result = $product;
            return view('search.index', compact('result'));
        }
    }
}
