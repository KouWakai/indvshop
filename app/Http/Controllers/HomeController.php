<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Home;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Home $home, Product $product)
    {
        $home = Home::find(1);
        $product = Product::all();

        $imagePath = [$home->slideOne, $home->slideTwo];

        $bannerImg = $home->imgOne;

        $img = Image::make(public_path("{$bannerImg}"))->fit(600,300);
        $img->save();

        foreach($imagePath as $imgpath){
            $img = Image::make(public_path("{$imgpath}"))->fit(1000, 400);
            $img->save();
        }

        foreach($product as $prd){
            $imgpath = $prd->image;
            $img = Image::make(public_path("{$imgpath}"))->fit(1000,1000);
            $img->save();
        }

        return view('home.index', compact('imagePath', 'bannerImg', 'product'));
    }
}
