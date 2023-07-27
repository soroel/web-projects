<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class office extends Controller
{
    //
    function showOffice(){
        return view('/pages.office');
    }
}
