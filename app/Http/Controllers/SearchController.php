<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function index()
    {
        return view('product.index');
        $keyword = request()->input('keyword');
dd(1);
        #クエリ生成
        $query = Product::query();

        #もしキーワードがあったら
        if(!empty($keyword))
        {
            $query->where('name','like','%'.$keyword.'%')->orWhere('mail','like','%'.$keyword.'%');
        }

        #ページネーション
        $data = $query->orderBy('created_at','desc')->paginate(10);
        return view('product.index')->with('data',$data)
        ->with('keyword',$keyword)
        ->with('message','ユーザーリスト');
    }
}
