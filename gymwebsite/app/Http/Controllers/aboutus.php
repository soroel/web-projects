<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutus extends Controller
{
    //
    function showAbout(){
        return view('/pages.about');
    }
}
