<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    //
    function showHomePage(){
        return view('home');

    }
}
