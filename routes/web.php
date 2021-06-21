<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\index_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\dashoard_controller;
use App\Http\Controllers\register_controller;
use PhpParser\Node\Stmt\Return_;

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

Route::get('/', [index_controller::class, 'index'])->name('index');
Route::get('/login', [login_controller::class, 'index'])->name('login');
Route::get('/dashboard', [dashoard_controller::class, 'index'])->name('dashboard');
Route::get('/register', [register_controller::class, 'index'])->name('register');
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/homes', function () {
    return view('home');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});
Route::get('/detail', function () {
    return view('detail');
});
