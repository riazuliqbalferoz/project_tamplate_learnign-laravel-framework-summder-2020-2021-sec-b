<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index()
    {
        return view('userLogin');
    }
    function social()
    {
        return view('social_login');
    }
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();

      
          if($user->status=="admin") {
            $req->session()->put('user', $user);
            return redirect('/dashboard');
        }

       else if($user->status=="user") {
            $req->session()->put('user', $user);
            return redirect('/product');
       
            
        }
        // return $req->input();
    }
}
