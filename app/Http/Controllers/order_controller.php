<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class order_controller extends Controller
{
    public function index(){
        return view('admin.order_list');
    }
}
