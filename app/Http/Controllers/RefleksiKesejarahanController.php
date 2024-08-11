<?php

namespace App\Http\Controllers;

use App\Models\RefleksiKesejarahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefleksiKesejarahanController extends Controller
{
    public function simpanRefleksi(Request $request)
    {
        // Validasi input
        $request->validate([
            'respon' => 'required|string',
            'sudah_dipelajari' => 'nullable|string',
            'dikuasai' => 'nullable|string',
            'belum_dikuasai' => 'nullable|string',
            'upaya_menguasai' => 'nullable|string',
        ]);

        // Dapatkan email pengguna yang sedang login
        $userEmail = Auth::user()->email;

        // Array aspek refleksi
        $aspekRefleksi = [
            'sudah dipelajari' => $request->input('sudah_dipelajari'),
            'dikuasai' => $request->input('dikuasai'),
            'belum dikuasai' => $request->input('belum_dikuasai'),
            'upaya untuk menguasai' => $request->input('upaya_menguasai'),
        ];

        // Simpan atau perbarui setiap jawaban refleksi
        foreach ($aspekRefleksi as $aspek => $jawaban) {
            RefleksiKesejarahan::updateOrCreate(
                [
                    'created_by' => $userEmail,
                    'aspek' => $aspek,
                ],
                [
                    'jawaban' => $jawaban,
                    'respon' => $request->input('respon'),
                    'created_at' => now(),
                ]
            );
        }

        // Redirect kembali ke halaman B dengan pesan sukses
        return redirect()->route('pages.B')->with('success', 'Jawaban refleksi telah disimpan.');
    }

}
