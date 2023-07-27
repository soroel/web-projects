<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactus extends Controller
{
    //
    function showContact(){
        return view('/pages.contact');
    }
}
