<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class news extends Controller
{
    //
    function showNews(){
        return view('/pages.news');
    }
}
