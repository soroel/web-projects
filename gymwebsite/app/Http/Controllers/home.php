<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    //
    function showHome(){
        return view('/pages.index');
    }
}
