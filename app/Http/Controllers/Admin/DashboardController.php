<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Customorder;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->path();

        if($path == 'admin/order'){
          $order = Order::all();
          return view($path, compact('order'));
        }

        if($path == 'admin/users'){
            $users = User::all();
            return view($path, compact('users'));
        }

        if($path == 'admin/products'){
            $product = Product::all();
            return view($path, compact('product'));
        }

        if($path == 'admin/customorder'){
          $customorder= Customorder::all();
          return view($path, compact('customorder'));
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

    public function update(Request $request, Product $product)
    {
        if($request->get('delete'))
        {
            $product->delete();
            $product = Product::all();

            return view('admin.products', compact('product'));

        }elseif($request->get('update'))
        {
            $data = request()->validate([
                'caption' => 'required',
                'price' => 'required',
                'image' => '',
              ]);

              if(request('image')){
                $imagePath = request('image')->store('uploads', 'public');

                $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
                $image->save();

                $imageArray = ['image' => $imagePath];
              }

              $product->update([
                'caption' => $data['caption'],
                'price' => $data['price'],
                'image' => $imagePath,
              ]);

              $product = Product::all();

              return view('admin.products', compact('product'));
        }
    }

}
