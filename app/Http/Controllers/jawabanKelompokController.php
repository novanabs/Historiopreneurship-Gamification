<?php

namespace App\Http\Controllers;

use App\Models\AnalisisKelompokKesejarahan;
use App\Models\Kelompok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class jawabanKelompokController extends Controller
{
    public function lihatJawaban($id_kelompok)
    {
        $jawaban = AnalisisKelompokKesejarahan::where('id_kelompok', $id_kelompok)->get();
        return view('latihan.jawabanKelompok', compact('jawaban'));
    }

    public function simpanJawaban(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'objek1' => 'nullable|string',
            'objek2' => 'nullable|string',
            'objek3' => 'nullable|string',
            'objek4' => 'nullable|string',
            'objek5' => 'nullable|string',
            'objek6' => 'nullable|string',
            'objek7' => 'nullable|string',
            'objek8' => 'nullable|string',
            'objek9' => 'nullable|string',
            'objek10' => 'nullable|string',
        ]);

        // Dapatkan email pengguna yang sedang login
        $userEmail = Auth::user()->email;

        // Dapatkan id_kelompok dari tabel kelompok berdasarkan email pengguna
        $kelompok = Kelompok::where('email', $userEmail)->first();
        if (!$kelompok) {
            return redirect()->back()->withErrors(['message' => 'Kelompok tidak ditemukan untuk pengguna ini.']);
        }

        $id_kelompok = $kelompok->id_kelompok;

        // Simpan atau update data ke database
        foreach ($validatedData as $key => $value) {
            if ($value) { // Lanjutkan hanya jika ada jawaban yang diberikan
                // Ambil nomor objek dari name textarea (misal, objek1 menjadi 1)
                if (preg_match('/^objek(\d+)$/', $key, $matches)) {
                    $no_objek = $matches[1]; // Dapatkan nomor objek dari name

                    // Cek apakah jawaban untuk id_kelompok dan no_objek sudah ada
                    $existingJawaban = AnalisisKelompokKesejarahan::where('id_kelompok', $id_kelompok)
                        ->where('no_objek', $no_objek)
                        ->first();

                    if ($existingJawaban) {
                        // Jika sudah ada, update jawaban dan created_by
                        $existingJawaban->update([
                            'jawaban' => $value,
                            'created_by' => $userEmail, // Update created_by dengan email pengguna yang baru
                            'updated_at' => now(), // Update timestamp sekarang
                        ]);
                    } else {
                        // Jika belum ada, buat jawaban baru
                        AnalisisKelompokKesejarahan::create([
                            'no_objek' => $no_objek, // Nomor objek dari data-value
                            'jawaban' => $value, // Jawaban dari textarea
                            'created_at' => now(), // Timestamp sekarang
                            'created_by' => $userEmail, // Nama lengkap pengguna dari session
                            'id_kelompok' => $id_kelompok, // ID kelompok dari tabel kelompok
                        ]);
                    }
                }
            }
        }

        return redirect()->back()->with('success', 'Jawaban berhasil disimpan dan diperbarui.');
    }



}
