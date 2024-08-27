<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd($credentials);


        if (Auth::attempt($credentials, $request->checkRemember)) {
            $request->session()->regenerate();
            // dd($credentials);
            return redirect()->intended('/');
        }

       

        return back()->withErrors([
            'email' => 'Tidak ada akun yang cocok dengan inputan anda'
        ])->onlyInput('email');
    }
    public function logout(Request $request): RedirectResponse
    {
        // dd(Auth::user());
        Auth::logout();
      
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
