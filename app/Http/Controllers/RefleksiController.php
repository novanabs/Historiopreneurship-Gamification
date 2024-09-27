<?php

namespace App\Http\Controllers;

use App\Models\Refleksi;
use App\Models\RefleksiKesejarahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefleksiController extends Controller
{
    public function simpanRefleksi(Request $request)
    {
        // Validasi input
        $request->validate([
            'respon' => 'required|string',
            'kategori' => 'required|string',
            'sudah_dipelajari' => 'nullable|string',
            'dikuasai' => 'nullable|string',
            'belum_dikuasai' => 'nullable|string',
            'upaya_menguasai' => 'nullable|string',
        ]);

        // Dapatkan email pengguna yang sedang login
        $userEmail = Auth::user()->email;

        // Array aspek refleksi dengan nilai dari input
        $aspekRefleksi = [
            'sudah dipelajari' => $request->input('sudah_dipelajari'),
            'dikuasai' => $request->input('dikuasai'),
            'belum dikuasai' => $request->input('belum_dikuasai'),
            'upaya untuk menguasai' => $request->input('upaya_menguasai'),
        ];

        // Dapatkan kategori dari input
        $kategori = $request->input('kategori');

        // Proses setiap aspek refleksi
        foreach ($aspekRefleksi as $aspek => $jawaban) {
            // Proses hanya jika ada jawaban yang terisi
            if (!empty($jawaban)) {
                $existingRecord = Refleksi::where('created_by', $userEmail)
                    ->where('aspek', $aspek)
                    ->where('kategori', $kategori)
                    ->first();

                if ($existingRecord) {
                    // Jika data sudah ada, update
                    $existingRecord->update([
                        'jawaban' => $jawaban,
                        'respon' => $request->input('respon'),
                        'created_at' => now(),
                    ]);
                } else {
                    // Jika data belum ada, buat baru
                    Refleksi::create([
                        'created_by' => $userEmail,
                        'aspek' => $aspek,
                        'kategori' => $kategori,
                        'jawaban' => $jawaban,
                        'respon' => $request->input('respon'),
                        'created_at' => now(),
                    ]);
                }
            }
        }

        // Redirect kembali ke halaman B dengan pesan sukses
        return redirect()->route('pages.B')->with('success', 'Jawaban refleksi telah disimpan.');
    }
}
