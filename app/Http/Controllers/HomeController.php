<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
    public function index()
    {
        $imagePath1 = "/IMG_0477.JPG";

        $image1 = Image::make(public_path("{$imagePath1}"))->fit(700, 400);

        $image1->save();

        return view('home.index', compact('imagePath1'));
    }
}
