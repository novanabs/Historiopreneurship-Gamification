<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PoinController extends Controller
{
    public function DND(Request $request)
{
    // Mengambil email pengguna yang sedang login
    $user_email = Auth::user()->email;

    // Validasi input dari form
    $request->validate([
        'nilai_akhir' => 'required|numeric',
        'aspek' => 'required|string',
    ]);

    // Cek apakah data untuk user ini sudah ada
    $existingData = DB::table('nilai')->where('email', $user_email)->where('aspek', $request->aspek)->first();

    if ($existingData) {
        // Jika data sudah ada, update data tersebut
        DB::table('nilai')
            ->where('email', $user_email)
            ->where('aspek', $request->aspek)
            ->update([
                'nilai_akhir' => $request->nilai_akhir,
                'waktu_selesai' => now(),
            ]);
    } else {
        // Jika data tidak ada, simpan data baru
        DB::table('nilai')->insert([
            'email' => $user_email,
            'nilai_akhir' => $request->nilai_akhir,
            'aspek' => $request->aspek,
            'waktu_selesai' => now(),
        ]);
    }

    // Redirect atau respons setelah menyimpan
    return redirect()->back()->with('success', 'Nilai berhasil disimpan');
}


    public function TTS(Request $request){
        $user_email = Auth::user()->email;
        $poin = User::where('email',$user_email)->first();
        if($poin->poin_TTS <= (int)$request->poin){
            if ($poin) {
                $poin->poin_TTS = (int)$request->poin; // Update nilai poin
                $poin->save(); // Simpan perubahan ke database
            }
        }

        return redirect()->back()->with('success', 'Poin berhasil diperbarui');
    }
}