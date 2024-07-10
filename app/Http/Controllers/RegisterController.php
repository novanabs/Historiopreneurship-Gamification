<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function store(Request $request): RedirectResponse
    {
        // dd($request);
        $validator = $request->validate([
            'namaInput' => 'required',
            'no_hpInput' => 'required',
            'emailInput' => 'required|email',
            'alamatInput' => 'required',
            'peranInput' => 'required',
            'passwordInput' => 'required|min:4|confirmed',
        ]);
        // dd($validator);
        $query = User::create([
            'nama_lengkap' => $request->namaInput,
            'no_hp' => $request->no_hpInput,
            'email' => $request->emailInput,
            'alamat' => $request->alamatInput,
            'peran' => $request->peranInput,
            'password' => Hash::make($request->passwordInput)
        ]);
        return redirect()->route('login');

        if ($query) {
            return redirect()->route('login');
        }else{
            return redirect()->back();
        }
    }
}
