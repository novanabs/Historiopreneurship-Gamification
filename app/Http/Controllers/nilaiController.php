<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\User;
use Illuminate\Http\Request;

class nilaiController extends Controller
{
    public function simpanNilaiIndividu(Request $request, $email)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nilai_akhir' => 'required|integer',
            'data_jawaban_penilai' => 'nullable|string',
        ]);

        // Dapatkan nilai kategori dari input hidden
        $aspek = $request->input('aspek');

        // Save the data to the `nilai` table
        Nilai::create([
            'email' => $email,
            'id_soal' => null,  // If not applicable, otherwise populate accordingly
            'aspek' => $aspek,
            'data_jawaban_penilai' => $validatedData['data_jawaban_penilai'],
            'nilai_akhir' => $validatedData['nilai_akhir'],
            'percobaan_ke' => null,  // Populate as needed
            'lama_waktu_pengerjaan' => null,  // Populate as needed
            'waktu_selesai' => now(),  // Set the completion time to the current time
        ]);

        return redirect()->route('dataJawabanIndividu', ['email' => $email])->with('success', 'Nilai dan feedback berhasil disimpan.');
    }

    public function simpanNilaiKelompok(Request $request, $id_kelompok)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nilai_akhir' => 'required|integer',
            'data_jawaban_penilai' => 'nullable|string',
        ]);

        // Dapatkan nilai kategori dari input hidden
        $aspek = $request->input('aspek');

        // Dapatkan semua anggota kelompok berdasarkan id_kelompok
        $anggotaKelompok = User::whereHas('kelompok', function ($query) use ($id_kelompok) {
            $query->where('id_kelompok', $id_kelompok);
        })->get();

        // Simpan data untuk setiap anggota kelompok
        foreach ($anggotaKelompok as $anggota) {
            Nilai::create([
                'email' => $anggota->email,
                'id_soal' => null,  // Jika tidak ada, biarkan null
                'aspek' => $aspek,
                'data_jawaban_penilai' => $validatedData['data_jawaban_penilai'],
                'nilai_akhir' => $validatedData['nilai_akhir'],
                'percobaan_ke' => null,  // Isi jika ada
                'lama_waktu_pengerjaan' => null,  // Isi jika ada
                'waktu_selesai' => now(),  // Set waktu selesai ke waktu saat ini
            ]);
        }

        // Redirect ke route yang menampilkan jawaban kelompok dengan pesan sukses
        return redirect()->route('dataJawabanKelompok', ['id_kelompok' => $id_kelompok])->with('success', 'Nilai dan feedback berhasil disimpan untuk seluruh anggota kelompok.');
    }


    public function simpanNilai(Request $request)
    {
        // Validasi data yang masuk
        $validatedData = $request->validate([
            'email' => 'required|email',
            'aspek' => 'required|string',
            'nilai_akhir' => 'required|numeric',
        ]);

        // Simpan data ke dalam tabel 'nilai'
        Nilai::create([
            'email' => $validatedData['email'],
            'id_soal' => null, // Atur jika diperlukan
            'aspek' => $validatedData['aspek'],
            'data_jawaban_penilai' => null, // Atur jika diperlukan
            'nilai_akhir' => $validatedData['nilai_akhir'],
            'percobaan_ke' => null, // Atur jika diperlukan
            'lama_waktu_pengerjaan' => null, // Atur jika diperlukan
            'waktu_selesai' => now(), // Set waktu selesai
        ]);

        // Mengirimkan respon ke client
        return response()->json(['message' => 'Data berhasil disimpan']);
    }
}
