<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    //
    function userLogin(){
        return view('/pages.login');
    }


}
