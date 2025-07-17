<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
    
    public function show(){
        return view('v_login.login');
    }
    public function loginUser(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials)) {
        return redirect()->route('home');
    }

    return back()->with('error', 'Login gagal!');
}
    public function logoutUser() { 
        Auth::logout(); request()->session()->invalidate(); 
        request()->session()->regenerateToken(); 
        return redirect()->route('home'); 
    }
}
