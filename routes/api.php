<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Home;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', function (Request $request){

    $home  = Home::find(1);

    return response()->json(['home' => $home]);
});

Route::get('/product', function (Request $request){

    $product = Product::orderBy('created_at','desc')->take(8)->get();

    return response()->json(['product' => $product]);
});