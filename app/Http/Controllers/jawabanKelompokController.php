<?php

namespace App\Http\Controllers;

use App\Models\AnalisisKelompokKesejarahan;
use App\Models\AnalisisKelompokKewirausahaan;
use App\Models\Kelompok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class jawabanKelompokController extends Controller
{
    public function lihatJawaban($id_kelompok)
    {
        // Mengambil jawaban dari tabel analisis_kelompok_kesejarahan berdasarkan id_kelompok
        $jawabanKesejarahan = AnalisisKelompokKesejarahan::where('id_kelompok', $id_kelompok)->get();

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
        return view('latihan.jawabanKelompok', compact('id_kelompok','jawabanKesejarahan', 'jawabanKewirausahaan1', 'jawabanKewirausahaan2', 'jawabanKewirausahaan3'));
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
                        // Jika sudah ada dan jawaban berubah, update jawaban dan created_by
                        if ($existingJawaban->jawaban !== $value) {
                            $existingJawaban->update([
                                'jawaban' => $value,
                                'created_by' => $userEmail, // Update created_by dengan email pengguna yang mengedit
                                'updated_at' => now(), // Update timestamp sekarang
                            ]);
                        }
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
