<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\index_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\dashoard_controller;
use App\Http\Controllers\register_controller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShopController;
use PhpParser\Node\Stmt\Return_;

Route::get('/', [index_controller::class, 'index'])->name('index');
Route::get('/login', [login_controller::class, 'index'])->name('login');
Route::get('/dashboard', [dashoard_controller::class, 'index'])->name('dashboard');
Route::get('/register', [register_controller::class, 'index'])->name('register');
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/cart',[CartController::class,'index']);
Route::get('/checkout',[CheckoutController::class,'index']);
Route::get('/detail',[DetailController::class,'index']);
Route::get('/shop',[ShopController::class,'index']);
Route::get('/thankyou', function () {
    return view('thankyou');
});

