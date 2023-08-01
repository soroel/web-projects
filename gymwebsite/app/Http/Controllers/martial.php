<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class martial extends Controller
{
    //
    function showMartial(){
        return view('/pages.martial');
    }
}
