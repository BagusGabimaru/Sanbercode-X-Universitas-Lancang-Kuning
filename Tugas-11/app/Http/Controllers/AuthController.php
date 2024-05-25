<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('view.register');
    }

    public function welcome(Request $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');

        return view('view.welcome',['fname' => $fname, 'lname' => $lname]);
    
    }
}