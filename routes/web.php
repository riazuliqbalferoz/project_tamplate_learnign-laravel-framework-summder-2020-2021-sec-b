<?php

use App\Http\Controllers\dashoard_controller;
use App\Http\Controllers\index_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\register_controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [index_controller::class, 'index'])->name('index');
Route::get('/login', [login_controller::class, 'index'])->name('login');
Route::get('/dashboard', [dashoard_controller::class, 'index'])->name('dashboard');
Route::get('/register', [register_controller::class, 'index'])->name('register');
Route::get('/userlogin', [UserController::class, 'index']);
Route::post('/userlogin', [UserController::class, 'login']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('detail/{id}', [ProductController::class, 'detail']);
Route::get('search', [ProductController::class, 'search']);
Route::post('/add_to_cart', [ProductController::class, 'addToCart']);
Route::get('cartlist', [ProductController::class, 'cartList']);
Route::get('removecart/{id}', [ProductController::class, 'removeCart']);
Route::get('ordernow', [ProductController::class, 'orderNow']);
Route::post('orderplace', [ProductController::class, 'orderPlace']);
Route::get('myorders', [ProductController::class, 'myOrders']);
Route::get('cancelorder/{id}', [ProductController::class, 'cancelOrder']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/userlogin');
});
