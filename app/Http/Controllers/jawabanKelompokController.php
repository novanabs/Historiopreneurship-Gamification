<?php

namespace App\Http\Controllers;

use App\Models\AnalisisIndividuKesejeranhanII;
use App\Models\AnalisisKelompokKesejarahan;
use App\Models\AnalisisKelompokKewirausahaan;
use App\Models\Kelompok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class jawabanKelompokController extends Controller
{
    public function lihatJawaban($id_kelompok)
    {
        // Mengambil jawaban dari tabel analisis_kelompok_kewirausahaan berdasarkan id_kelompok dan kategori
        $jawabanKewirausahaan1 = AnalisisKelompokKewirausahaan::where('id_kelompok', $id_kelompok)
            ->where('kategori', 'aktivitas 1')
            ->whereIn('aspek', ['Pengalaman yang didapat', 'kelebihan e-commerce', 'kekurangan e-commerce'])
            ->get();

        $jawabanKewirausahaan2 = AnalisisKelompokKewirausahaan::where('id_kelompok', $id_kelompok)
            ->where('kategori', 'aktivitas 2')
            ->whereIn('aspek', ['Jenis-jenis teknologi', 'Pengaruh Teknologi', 'Kelebihan dan Kekurangan penggunaan teknologi', 'kondisi proses sebelum dan sesudah'])
            ->get();

        $jawabanKewirausahaan3 = AnalisisKelompokKewirausahaan::where('id_kelompok', $id_kelompok)
            ->where('kategori', 'aktivitas 3')
            ->where('aspek', 'Hasil analisa kelompok')
            ->get();

        // Mengembalikan tampilan dengan data
        return view('latihan.jawabanKelompok', compact('id_kelompok', 'jawabanKesejarahan', 'jawabanKewirausahaan1', 'jawabanKewirausahaan2', 'jawabanKewirausahaan3'));
    }


    public function simpanAktivitas(Request $request)
    {
        // Dapatkan email pengguna yang sedang login
        $userEmail = Auth::user()->email;

        // Dapatkan id_kelompok dari tabel kelompok berdasarkan email pengguna
        $kelompok = Kelompok::where('email', $userEmail)->first();
        if (!$kelompok) {
            return redirect()->back()->withErrors(['message' => 'Kelompok tidak ditemukan untuk pengguna ini.']);
        }

        $id_kelompok = $kelompok->id_kelompok;
        $created_by = auth()->user()->email;

        // Ambil data dari request
        $kategori = $request->input('kategori');
        $jawaban = $request->input('jawaban');

        // Mapping untuk aspek dari jawaban
        $aspekMapping = [
            'pengalaman' => 'Pengalaman yang didapat',
            'kelebihan' => 'kelebihan e-commerce',
            'kekurangan' => 'kekurangan e-commerce',
            'JenisTeknologi' => 'Jenis-jenis teknologi',
            'pengaruhTeknologi' => 'Pengaruh Teknologi',
            'kelebihanKekuranganTeknologi' => 'Kelebihan dan Kekurangan penggunaan teknologi',
            'kondisiProses' => 'kondisi proses sebelum dan sesudah',
            'analisaKelompok' => 'Hasil analisa kelompok'
        ];

        // Loop untuk menyimpan atau memperbarui setiap jawaban ke dalam tabel
        foreach ($jawaban as $key => $value) {
            $aspek = $aspekMapping[$key];

            // Jika jawaban adalah null, tetap gunakan null
            $value = $value === '' ? null : $value;

            // Cek apakah data sudah ada
            $existingRecord = AnalisisKelompokKewirausahaan::where('id_kelompok', $id_kelompok)
                ->where('kategori', $kategori)
                ->where('aspek', $aspek)
                ->first();

            if ($existingRecord) {
                // Update jawaban yang sudah ada jika berubah
                if ($existingRecord->jawaban !== $value) {
                    $existingRecord->update([
                        'jawaban' => $value,
                        'created_by' => $created_by, // Update created_by jika ada perubahan
                        'updated_at' => now(),
                    ]);
                }
            } else {
                // Buat jawaban baru jika belum ada
                AnalisisKelompokKewirausahaan::create([
                    'id_kelompok' => $id_kelompok,
                    'kategori' => $kategori,
                    'aspek' => $aspek,
                    'jawaban' => $value, // Nilai kosong jika sebelumnya null
                    'created_at' => now(),
                    'created_by' => $created_by,
                ]);
            }
        }

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Jawaban berhasil disimpan atau diperbarui.');
    }


}
