<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regcontroller extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function register(Request $request)
    {


        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm-password' => 'required|same:password'
            ]

        );

        echo "<pre>";
        print_r($request->all());
    }
}
