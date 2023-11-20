<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login()
    {
        return view('login');
    }

    function loginpost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

       if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended(route('home'));
        }

        return redirect(route('login'))->with([
            "error" => "Email atau Password salah."
        ]);
    }
    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
