<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class changepassword_controller extends Controller
{
    public function index(){
        return view('admin.resetPassword');
    }
    
}
