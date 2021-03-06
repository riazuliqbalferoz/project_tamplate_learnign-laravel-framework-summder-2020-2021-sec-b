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
    function register_index()
    {
        return view('register');
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
    function register(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->status = "user";
        $user->save();
        return redirect('/userlogin');
    }
}
