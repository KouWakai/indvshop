<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\User;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->path();

        if($path == 'admin/users'){
            $users = User::all();
            return view($path, compact('users'));
        }

        if($path == 'admin/products'){
            $product = Product::all();
            return view($path, compact('product'));
        }

        return view($path);
    }

    public function store(Request $request)
    {
          $path = $request->path();

          $data = request()->validate([
            'caption' => 'required',
            'price' => 'required',
            'image' => 'required|image',
          ]);

            //dd($request);

            //dd($imagePath = $request->image);

          $imagePath = $request->image->store('uploads', 'public');

          $img = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
          $img->save();

          $product = Product::create([
            'caption' => $data['caption'],
            'price' => $data['price'],
            'image' => $imagePath,
          ]);

        return redirect($path);
    }
}
