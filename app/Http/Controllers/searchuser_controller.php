<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchuser_controller extends Controller
{
    public function index(){
        return view('serarchUser');
    }
}
