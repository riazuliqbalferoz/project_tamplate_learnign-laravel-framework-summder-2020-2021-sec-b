<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class search_contrller extends Controller
{
    public function index(){
        return view('search_product');
    }
}
