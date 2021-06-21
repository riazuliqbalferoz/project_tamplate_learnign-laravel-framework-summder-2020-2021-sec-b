<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class event_upload extends Controller
{
    public function index(){
        return view('upload_event');
    }
    public function update(){
        return view('upload_event_update');
    }
}
