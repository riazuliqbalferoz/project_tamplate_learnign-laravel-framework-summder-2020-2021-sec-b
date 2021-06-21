<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\index_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\dashoard_controller;
use App\Http\Controllers\register_controller;
use App\Http\Controllers\searchuser_controller;
use App\Http\Controllers\changepassword_controller;
use App\Http\Controllers\event_upload;
use App\Http\Controllers\search_contrller;
use App\Http\Controllers\agent_seller_controller;
use App\Http\Controllers\order_controller;


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
Route::get('/search_product', [search_contrller::class, 'index'])->name('search_product');

Route::get('/upload_event', [event_upload::class, 'index'])->name('upload_event');

Route::get('/register', [register_controller::class, 'index'])->name('register');


Route::get('/serarchUser', [searchuser_controller::class, 'index'])->name('serarchUser');

Route::get('/resetPassword', [changepassword_controller::class, 'index'])->name('resetPasswrod');

Route::get('/dashboard', [dashoard_controller::class, 'index'])->name('dashboard');
Route::get('/add_agent_seller', [agent_seller_controller::class, 'index'])->name('add_agent_seller');
Route::get('/order_list', [order_controller::class, 'index'])->name('order_list');