<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    // Existing method to show all students
    public function dataMahasiswa()
    {
        $Mahasiswas = User::where('peran', 'siswa')->get(); // Filter users based on role
        return view('lamanDosen.dataMahasiswa', compact('Mahasiswas'));
    }

    public function saveGroup(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'id_kelompok' => 'required|integer|min:1|max:10',
        ]);

        Kelompok::updateOrCreate(
            ['email' => $request->email],
            ['id_kelompok' => $request->id_kelompok]
        );

        return redirect()->route('dataMahasiswa')->with('success', 'Kelompok berhasil diupdate!');
    }
    public function dataKelas()
    {
        return view('lamanDosen.dataKelas');
    }

    public function dataLatihan()
    {
        return view('lamanDosen.dataLatihan');
    }

    public function dataNilai()
    {
        // Mengambil semua data kelompok beserta pengguna yang ada di dalamnya
        $Kelompoks = Kelompok::with('users')->get();
        
        // Mengambil data mahasiswa berdasarkan peran 'siswa'
        $Mahasiswas = User::where('peran', 'siswa')->get();
    
        // Mengirimkan kedua variabel ke view
        return view('lamanDosen.dataNilai', compact('Mahasiswas', 'Kelompoks'));
    }
}
