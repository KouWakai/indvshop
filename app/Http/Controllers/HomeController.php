<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Home;
use App\Models\Product;
use App\Models\Customorder;
use App\Models\Contact;

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
/*
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
            $img = Image::make(public_path("storage/{$imgpath}"))->fit(1000,1000);
            $img->save();
        }*/

        return view('home.index', compact('home', 'product'));
    }

    public function show()
    {
        $path = request()->path();

        if($path == 'customorder')
        {
            return view('customorder.show');
        }
        elseif($path == 'contact')
        {
            return view('contact.show');
        }
    }

    public function store()
    {
        $path = request()->path();

        if($path == 'customorder')
        {
            $data = request();

            $imagePath = request()->image->store('uploads', 'public');

            $img = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $img->save();

            $customorder = Customorder::create([
                'username' => $data['username'],
                'email' => $data['email'],
                'image' => $imagePath,
                'description' => $data['description'],
              ]);

            return view('customorder.store', compact('customorder'));
        }elseif($path == 'contact')
        {
            $data = request();

            $contact = Contact::create([
                'username' => $data['username'],
                'email' => $data['email'],
                'description' => $data['description'],
              ]);

            return view('contact.store', compact('contact'));
        }

    }
}
