<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashoard_controller extends Controller
{
    public function index(){
        return view('dashboard');
    }

}
