<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class login extends Controller
{

    //
    function showLogin(){
        return view('login');
    }
    function userLogin(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        $user = User::where('username','=',$request->username)->first();
        if($user){
            if($request->password == $user->password){
                $request->session()->put('loggedUser',$user->id);
                return redirect('index')->with('success','User logged in successfully.');
            }
            else{
                return back()->with('fail','Invalid password');
            }
        }
        else{
            return back()->with('fail','No account found for this username');
        }
    }
}
