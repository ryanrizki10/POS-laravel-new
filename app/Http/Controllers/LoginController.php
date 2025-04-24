<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:7',
        ]);

        // $email = $request->email;
        // $password = $request->password;
        $credentials = $request->only('email', 'password');
        // Auth
        // if (Auth::attempt($credentials)) {
        //     return redirect('dashboard')->with('success', 'Success Login');
        // } else {
        //     return back()->withErrors(['email'=> 'Please check your creddentials'])->withInput();
        // }
        if (Auth::attempt($credentials)) {
            // Cek level_id user setelah berhasil login
            if (Auth::user()->level_id == 1) {
                return redirect('dashboard')->with('success', 'Success Login');
            } else {
                Auth::logout(); // logout user yang tidak memenuhi syarat
                return back()
                    ->withErrors(['email' => 'Akses ditolak. Hanya admin yang bisa login.'])
                    ->withInput();
            }
        } else {
            return back()
                ->withErrors(['email' => 'Mohon cek kredensialmu'])
                ->withInput();
        }
    }
    public function logout(request $request): RedirectResponse
    {
        auth::logout();
        return redirect('login')->with('Success', '');
    }
}