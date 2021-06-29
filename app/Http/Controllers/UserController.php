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
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "user email or password did not match";
        } else {
            $req->session()->put('user', $user);
            return redirect('/product');
        }
        // return $req->input();
    }
}
