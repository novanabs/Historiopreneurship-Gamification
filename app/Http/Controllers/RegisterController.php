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
        return view('home/daftar');
    }

    public function store(Request $request): RedirectResponse
    {
        // dd($request);
        // dd($request->all());

        $validator = $request->validate([
            'namaInput' => 'required',
            'no_hpInput' => 'required',
            'emailInput' => 'required|email',
            'alamatInput' => 'required',
            'peranInput' => 'required',
            'passwordInput' => 'required|min:4',
            'kelasInput'=>'required',
            'jenisKelamin' => 'required|in:L,P'
        ]);


        
        $query = User::create([
            'nama_lengkap' => $request->namaInput,
            'no_hp' => $request->no_hpInput,
            'email' => $request->emailInput,
            'alamat' => $request->alamatInput,
            'peran' => $request->peranInput,
            'password' => Hash::make($request->passwordInput),
            'kelas'=>$request->kelasInput,
            'jenis_kelamin' => $request->jenisKelamin
        ]);

        // dd($query);
        return redirect()->route('login');

        if ($query) {
            return redirect()->route('login');
        }else{
            return redirect()->back();
        }
    }
}
