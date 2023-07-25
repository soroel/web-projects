<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class register extends Controller
{
    //
    function registerUser(Request $req){
        $userdata= $req->validate([
            'fullname'=> ['required', Rule::unique('users','name')],
            'emailaddress'=>['required', 'email', Rule::unique('users','email')],
            'phonenumber'=>'required',
            'password'=>['required','min:8'],
            'confirm_password'=>'required'

        ]);
        if($userdata['password']!=$userdata['confirm_password']){
            return redirect('register')->with('error','Password and Confirm Password do not match');
        }
        $userdata['password']=bcrypt($req->password);
        $userdata['confirm_password']=bcrypt($req->confirm_password);
        $user= User::create($userdata);
        auth()->login($user);
        return redirect('/') ->with('success','User Registered Successfully');
        
        
        

              
            
        }
    }
 
