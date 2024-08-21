<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
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

    // Save the data to the `nilai` table
    Nilai::create([
        'email' => $email,
        'id_soal' => null,  // If not applicable, otherwise populate accordingly
        'aspek' => 'analisa_individu_kesejarahan',  // Set the appropriate aspect
        'data_jawaban_penilai' => $validatedData['data_jawaban_penilai'],
        'nilai_akhir' => $validatedData['nilai_akhir'],
        'percobaan_ke' => null,  // Populate as needed
        'lama_waktu_pengerjaan' => null,  // Populate as needed
        'waktu_selesai' => now(),  // Set the completion time to the current time
    ]);

    return redirect()->back()->with('success', 'Nilai dan feedback berhasil disimpan.');
}

}
