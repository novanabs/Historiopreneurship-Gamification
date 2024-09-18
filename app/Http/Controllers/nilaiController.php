<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $request->validate([
            'email' => 'required|email',
            'nilai_akhir' => 'required|integer',
            'benar' => 'required|integer',
            'salah' => 'required|integer',
            'lama_waktu_pengerjaan' => 'required|integer'
        ]);

        // Menentukan pesan motivasi berdasarkan nilai
        $message = $request->nilai_akhir > 60
            ? 'Semangat dan tingkatkan lagi belajarnya!'
            : 'Jangan patah semangat, terus tingkatkan belajar lagi!';

        // Cek apakah data dengan email yang diberikan sudah ada
        $existingRecord = DB::table('nilai')->where('email', $request->email)->first();

        if ($existingRecord) {
            // Jika data ada, lakukan update
            DB::table('nilai')->where('email', $request->email)->update([
                'nilai_akhir' => $request->nilai_akhir,
                'data_jawaban_penilai' => $message,
                'lama_waktu_pengerjaan' => $request->lama_waktu_pengerjaan,
                'waktu_selesai' => now(),
            ]);
        } else {
            // Jika data tidak ada, lakukan create
            DB::table('nilai')->insert([
                'email' => $request->email,
                'nilai_akhir' => $request->nilai_akhir,
                'data_jawaban_penilai' => $message,
                'lama_waktu_pengerjaan' => $request->lama_waktu_pengerjaan,
                'waktu_selesai' => now(),
            ]);
        }

        // Mengarahkan ke halaman hasil evaluasi dengan parameter
        return view('latihan.selesaiEvaluasi', [
            'benar' => $request->benar,  // Ganti dengan nilai yang sebenarnya
            'salah' => $request->salah,   // Ganti dengan nilai yang sebenarnya
            'skor' => $request->nilai_akhir
        ]);
    }
}
