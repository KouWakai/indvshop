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
        $imagePath["first"] = "/IMG_0477.JPG";
        $imagePath["second"] = "/IMG_0478.JPG";

        foreach($imagePath as $img){
            $img = Image::make(public_path("{$img}"))->fit(1000, 400);
            $img->save();
        }

        return view('home.index', $imagePath);
    }
}
