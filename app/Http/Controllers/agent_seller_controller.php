<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class agent_seller_controller extends Controller
{
    public function index(){
        return view('add_agent_seller');
    }
    public function update(){
        return view('edit_agent_info');
    }
    
    
}
