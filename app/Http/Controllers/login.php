<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class login extends Controller
{ 
    function showLogin(){
        return view('/pages.login');
    }   
    public function userLogin(Request $request)
     {
        $request->validate([
            'emailaddress'=>'required|email',
            'password'=>'required|min:5|max:12',
        ]);
        $user = Member::where('emailaddress','=',$request->emailaddress)->first();
        if($user){
            
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loggedUser',$user->id);
                return redirect('/pages.home');
                
            }
            else{
                return back()->with('fail','Invalid password');
            }
        }
        else{
            return back()->with('fail','No account found for this email');
        }
     }

}

        