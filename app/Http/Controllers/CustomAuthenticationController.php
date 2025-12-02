<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class CustomAuthenticationController extends Controller
{
    public function Login(){
        return view("/signin");
    }
    public function registration(){
        return view("/signun");
    }
    public function registerUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:Users',
            'password' => 'required|min:5|max:12'
        ]);
        $user = new User();
        $user-> name = $request->name;
        $user->email = $request -> email;
        $user-> password = $request->password;
        $res =$user-> save();
        session()->flash('success', 'User registered successfully!');

        // Redirect back to the registration page with success message
        return redirect()->back();
        // if($res){
        //     return back()->with('success','You have registerd successfully');
        // }else{
        //     return back()->with('fail','Something went wrong');
        // }
    }
    public function loginUser(Request $request){
         echo 'valiiii';
    }
}

