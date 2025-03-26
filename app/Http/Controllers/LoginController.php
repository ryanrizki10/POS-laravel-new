<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
    return view('login');
    }
    public function actionLogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:7',
        ]);
        $credentials = $request->only('email', 'password');
        if (auth::attempt($credentials)) {
            return redirect()->with('success', 'SuccessLogin');
        } else {
            return back()->withErrors(['email' => 'Invalid Email or Password'])->withInput();
        }
    }
}
