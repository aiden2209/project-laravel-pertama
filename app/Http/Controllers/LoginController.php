<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login | Delina'
        ]);
    }
    
    public function autenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            // 'username' => 'required', 'min:3', 'max:255',
            'password' => 'required'
        ]
        );

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with('success', 'Berhasil Login Nikmati Promo Menarik');
        }

        return back()->with('loginError', 'Ada yang salah nih Email Atau Passwordnya!!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/');  
    }
}
