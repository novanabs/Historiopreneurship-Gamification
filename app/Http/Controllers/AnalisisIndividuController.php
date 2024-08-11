<?php

namespace App\Http\Controllers;

use App\Models\AnalisisIndividuKesejarahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnalisisIndividuController extends Controller
{
    public function simpanJawabanIndividu(Request $request)
    {
        // Validasi input
        $request->validate([
            'objekWisata' => 'required|string',
            'objekKesejarahan' => 'required|string',
            'urgensiObjekKesejarahan' => 'required|string',
            'urgensiKesejarahan' => 'required|string',
        ]);

        // Dapatkan email user yang sedang login
        $userEmail = Auth::user()->email;

        // Daftar aspek dan jawaban yang diinput
        $aspekList = [
            'wisata' => $request->input('objekWisata'),
            'kesejarahan' => $request->input('objekKesejarahan'),
            'urgensi objek kesejarahan' => $request->input('urgensiObjekKesejarahan'),
            'urgensi kesejarahan' => $request->input('urgensiKesejarahan'),
        ];

        // Simpan atau perbarui jawaban untuk setiap aspek
        foreach ($aspekList as $aspek => $jawaban) {
            $existingJawaban = AnalisisIndividuKesejarahan::where('aspek', $aspek)
                ->where('created_by', $userEmail)
                ->first();

            if ($existingJawaban) {
                // Jika jawaban sudah ada, perbarui
                $existingJawaban->update(['jawaban' => $jawaban]);
            } else {
                // Jika jawaban belum ada, buat yang baru
                AnalisisIndividuKesejarahan::create([
                    'aspek' => $aspek,
                    'jawaban' => $jawaban,
                    'created_at' => now(),
                    'created_by' => $userEmail,
                ]);
            }
        }

        // Redirect setelah data berhasil disimpan
        return redirect()->back()->with('success', 'Jawaban berhasil disimpan.');
    }

}
