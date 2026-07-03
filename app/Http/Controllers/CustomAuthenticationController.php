<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;  



class CustomAuthenticationController extends Controller
{
    public function registration(){
        return view("signup");
    }
  
    public function registerUser(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admin,email',
            'password' => 'required|min:6|confirmed',
        ]);
        
        $admin = new Admin();
        $admin-> name = $request->name;
        $admin->email = $request -> email;
        $admin-> password = Hash::make($request->password);

        $save = $admin->save();

        session()->flash('success', 'Admin registered successfully!');

        // Redirect back to the registration page with success message
      
        if($save){
            return back()->with('success','Admin registered successfully');
        }else{
            return back()->with('fail','Something went wrong, please try again');
        }
    }

    // login/ sign in

    public function login() {
        return view('signIn');

    }

    public function loginUser(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
        $request->session()->regenerate();

       // Send authenticated admin to your home or landing route
        return redirect()->intended('/')->with('success', 'Logged in successfully!');
    }

    // If authentication fails, send back with an error message
    return back()->with('fail', 'Invalid email or password credentials.')->withInput($request->only('email'));
    }

    
}

