<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Customorder;
use App\Models\Contact;
use App\Models\Home;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->path();

        if($path == 'admin/order'){
          $order = Order::orderBy('created_at','desc')->get();
          return view($path, compact('order'));
        }

        if($path == 'admin/users'){
            $users = User::all();
            return view($path, compact('users'));
        }

        if($path == 'admin/products'){
            $product = Product::orderBy('created_at','desc')->paginate(12);
            return view($path, compact('product'));
        }

        if($path == 'admin/customorder'){
          $customorder= Customorder::all();
          return view($path, compact('customorder'));
        }

        if($path == 'admin/contact'){
          $contact= Contact::all();
          return view($path, compact('contact'));
        }

        if($path == 'admin/dashboard'){
          $order= Order::all()->count();
          $users= User::all()->count();
          $customorder= Customorder::all()->count();
          $contact= Contact::all()->count();
          return view($path, compact('order', 'users',  'customorder' ,'contact'));
        }

        if($path == 'admin/config'){
          $home= home::find(1);
          return view($path, compact('home'));
        }

        return view($path);
    }

    public function store(Request $request)
    {
          $path = $request->path();

          $data = request()->validate([
            'caption' => 'required',
            'price' => 'required',
            'category' => 'required',
            'image' => 'required|image',
          ]);

          $file = request()->file('image');

          $name = $file->getClientOriginalName();

          $tmpPath = storage_path('/') . $name;

          $image = Image::make($file)->fit(1000, 1000);

          $image->save($tmpPath);

          Storage::disk('s3')->putFileAs('/uploads', new File($tmpPath), $name, 'public');

          $s3path = Storage::disk('s3')->url('uploads/' . $name);

          $product = Product::create([
            'caption' => $data['caption'],
            'price' => $data['price'],
            'category' => $data['category'],
            'image' => $s3path,
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
          $path = request()->path();

          if($path == 'admin/config/update')
          {
            $data = request();

            $home = Home::find(1);

            $imageArray  = array('slideOne' => $home->slideOne,'slideTwo' => $home->slideTwo,'imgOne' => $home->imgOne);

              $imgkeys = array_keys($imageArray);
              $arytmp = array();
              $cnt = 0;

              foreach($imgkeys as $key)
              {
                if( null != request($key))
                {
                  $file = request()->file($key);

                  $name = $file->getClientOriginalName();

                  $tmpPath = storage_path('/') . $name;

                  $image = Image::make($file)->fit(1000, 400);

                  $image->save($tmpPath);

                  Storage::disk('s3')->putFileAs('/uploads', new File($tmpPath), $name, 'public');

                  $s3path = Storage::disk('s3')->url('uploads/' . $name);

                  $arytmp += array($key => $s3path);

                  $cnt++;
                }
              }

                $imageArray = array_replace($imageArray, $arytmp);


            if($cnt!=0)
            {
              $home->update([
                'slideOne' => $imageArray['slideOne'],
                'slideTwo' => $imageArray['slideTwo'],
                'imgOne' => $imageArray['imgOne'],
              ]);
            }

            return redirect('admin/config');

          }else
          {
            $data = request()->validate([
              'caption' => 'required',
              'price' => 'required',
              'category' => 'required',
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
              'category' => $data['category'],
              'image' => $imagePath,
            ]);

            $product = Product::orderBy('created_at','desc')->paginate(12);

            return redirect('admin/products');
          }

        }
    }

}
