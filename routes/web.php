<?php

use App\Http\Controllers\dashoard_controller;
use App\Http\Controllers\index_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\register_controller;
use App\Http\Controllers\UserController;
<<<<<<< HEAD
use App\Http\Controllers\ProductController;
use PhpParser\Node\Stmt\Return_;
//use admin controller 
use App\Http\Controllers\dashoboard_controller;
use App\Http\Controllers\adduser_controller;

use App\Http\Controllers\searchuser_controller;
use App\Http\Controllers\changepassword_controller;
use App\Http\Controllers\event_upload;
use App\Http\Controllers\search_contrller;
use App\Http\Controllers\agent_seller_controller;
use App\Http\Controllers\order_controller;

=======
use Illuminate\Support\Facades\Route;
>>>>>>> 8375c0831fed681795c5ed204c460462f0877a8e

Route::get('/', [index_controller::class, 'index'])->name('index');

Route::get('/login', [login_controller::class, 'index'])->name('login');
Route::get('/dashboard', [dashoard_controller::class, 'index'])->name('dashboard');
Route::get('/register', [register_controller::class, 'index'])->name('register');
<<<<<<< HEAD

Route::get('/userlogin',[UserController::class,'index']);
Route::post('/userlogin',[UserController::class,'login']);
Route::get('/sociallogin',[UserController::class,'social']);
Route::get('/product',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::get('search',[ProductController::class,'search']);
Route::post('/add_to_cart',[ProductController::class,'addToCart']);
Route::get('cartlist',[ProductController::class,'cartList']);
Route::get('/logout',function(){
   Session::forget('user');
   return redirect('/userlogin');
=======
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
>>>>>>> 8375c0831fed681795c5ed204c460462f0877a8e
});

//route for admin controller
Route::get('dashboard',[dashoboard_controller::class,'index']);
Route::get('adduser',[adduser_controller::class,'index']);
Route::get('/add', [adduser_controller::class, 'add']);
Route::get('/search_product', [search_contrller::class, 'index'])->name('search_product');

Route::get('/upload_event', [event_upload::class, 'index'])->name('upload_event');
Route::get('/upload_event_update', [event_upload::class, 'update'])->name('upload_event_update');

Route::get('/serarchUser', [searchuser_controller::class, 'index'])->name('serarchUser');

Route::get('/resetPassword', [changepassword_controller::class, 'index'])->name('resetPasswrod');
Route::get('/sales_report', [dashoard_controller::class, 'sales'])->name('sales_report');
Route::get('/add_agent_seller', [agent_seller_controller::class, 'index'])->name('add_agent_seller');
Route::get('/edit_agent_info', [agent_seller_controller::class, 'update'])->name('edit_agent_info');



Route::get('/order_list', [order_controller::class, 'index'])->name('order_list');