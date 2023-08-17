<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\Models\User;

class register extends Controller
{
    //
    function userRegister(){
        return view('register');
    }
    function store(Request $request){
        //validate requests
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:4',
        ]);
        //check if username already exists
        $uname = User::where('username','=',$request->username)->first();
        if($uname){
            return back()->with('fail','Username already exists');
        }

        //insert data into database
        $requestData = $request->all();
        $requestData['password'] = Hash::make($request->password);
        User::create($requestData);
        return redirect()->route('create')->with('success','you registered successfully.');


        }
}
