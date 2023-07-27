<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staff extends Controller
{
    //
    function showStaff(){
        return view('/pages.staff');
    }
}
