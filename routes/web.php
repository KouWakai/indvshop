<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::delete('/cart/{rowId}', [CartController::class, 'destroy']);
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart', [CartController::class, 'store']);

Auth::routes();

Route::group(['prefix' => 'admin'],function(){
    Route::get('/', function(){return redirect('/admin/home');});
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'],function(){
    Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('home', [AdminHomeController::class, 'index'])->name('admin.home');
});
