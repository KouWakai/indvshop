<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
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
Route::get('/product', [ProductController::class, 'index']);

Route::delete('/cart/{rowId}', [CartController::class, 'destroy']);
Route::delete('/cart/all', [CartController::class, 'destroy']);
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/checkout', [CartController::class, 'show']);
Route::post('/cart', [CartController::class, 'store']);

Route::post('/order', [OrderController::class, 'store']);

Route::get('/customorder', [HomeController::class, 'show']);
Route::post('/customorder', [HomeController::class, 'store']);

Route::get('/contact', [HomeController::class, 'show']);
Route::post('/contact', [HomeController::class, 'store']);

Auth::routes();

Route::group(['prefix' => 'admin'],function(){
    Route::get('/', function(){return redirect('/admin/home');});
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login']);
});

//ここのルートは要リファクタリング
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'],function(){
    Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('home', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('order', [DashboardController::class, 'index'])->name('admin.order');
    Route::get('products', [DashboardController::class, 'index'])->name('admin.products');
    Route::post('products', [DashboardController::class, 'store'])->name('admin.products-store');
    Route::patch('products/{product}', [DashboardController::class, 'update']);
    Route::get('users', [DashboardController::class, 'index'])->name('admin.users');
    Route::get('customorder', [DashboardController::class, 'index'])->name('admin.customorder');
    Route::get('contact', [DashboardController::class, 'index'])->name('admin.contact');
    Route::get('config', [DashboardController::class, 'index'])->name('admin.config');
});
