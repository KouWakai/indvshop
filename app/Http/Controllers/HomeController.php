<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
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
        $product = Product::orderBy('created_at','desc')->take(8)->get();

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

          $file = request()->file('image');

          $name = $file->getClientOriginalName();

          $tmpPath = storage_path('/') . $name;

          $image = Image::make($file)->fit(1000, 1000);

          $image->save($tmpPath);

          Storage::disk('s3')->putFileAs('/uploads/customorder', new File($tmpPath), $name, 'public');

          $s3path = Storage::disk('s3')->url('uploads/customorder/' . $name);

            $customorder = Customorder::create([
                'username' => $data['username'],
                'email' => $data['email'],
                'image' => $s3path,
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

            return response()->json(['contact' => $contact]);
        }

    }
}
