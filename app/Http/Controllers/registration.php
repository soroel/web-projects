<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registration extends Controller
{
    //
    function registerUser(){
        return view('register');
    }
}
