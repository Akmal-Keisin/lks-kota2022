<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.web.login');
    }

    public function authLogin(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($validatedData)) {
            return redirect()->intended('/loggin');
        }
    }
    public function loggin() {
        return view('auth.web.loggin');
    }
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
