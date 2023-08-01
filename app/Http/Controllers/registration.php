<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class registration extends Controller
{
    //
    function registerUser(){
        return view('register');
    }

    function store(Request $request){
        $request->validate([
            'fullname'=>'required',
            'emailaddress'=>'required|email',
            'phonenumber'=>'required',
            'password'=>'required|min:5|max:12',
            'confirm_password'=>'required|min:5|max:12',
        ]);
        //check if email already exists
        $email = Member::where('emailaddress','=',$request->emailaddress)->first();
        if($email){
            return back()->with('fail','Email already exists');
        }
        //check if password and confirm password are the same
        if($request->password != $request->confirm_password){
            return back()->with('fail','Password and confirm password are not the same');
        }
        //insert data into database
        $requestData = $request->all();
        $requestData['password'] = Hash::make($request->password);
        Member::create($requestData);
        return redirect()->route('pages.index')->with('success','Member registered successfully.');

    }
}
