<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function indexlogin()
    {

        return view('login');
    }
    public function login(Request $request)
    {

        $request->validate([
            'email' => "required|email",
            "password" => "required",
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => "provided email is not true"
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect("/");
    }
}

