<?php

namespace App\Http\Controllers;

use App\Models\add_admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adduser_controller extends Controller
{
    public function index()
    {
        return view('adduser');
    }

    function add(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'passwrod' => 'required',


        ]);

        // data insetion for admin registration
        $query = add_admin::insert([

            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            //'password'=>$request ->input('passwrod'),
            //'password' => $request->Hash::make(input('password')),
            'password' => $request->input(Hash::make('password')),
            'status' => 'admin'


        ]);

// Data insertion in user table for login
        $query1 = User::insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('passwrod'),
            'status' => 'admin'
        ]);
        if ($query) {
            return back()->with('success', 'data has been inserted Successfully');
        } else {
            return back()->with('filed');
        }
    }
}
