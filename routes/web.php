<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\dashoard_controller;
use App\Http\Controllers\register_controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


use PhpParser\Node\Stmt\Return_;

Route::get('/', [index_controller::class, 'index'])->name('index');
Route::get('/login', [login_controller::class, 'index'])->name('login');
Route::get('/dashboard', [dashoard_controller::class, 'index'])->name('dashboard');
Route::get('/register', [register_controller::class, 'index'])->name('register');

Route::get('/userlogin',[UserController::class,'index'] );
Route::post('/userlogin',[UserController::class,'login'] );
Route::get('/product',[ProductController::class,'index'] );

