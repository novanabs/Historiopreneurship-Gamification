<?php

namespace App\Listeners;

use App\Events\PoinUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class HitungPoinListener
{
    public function handle(PoinUpdated $event)
    {
        $email = $event->email;

        // Ambil data nilai berdasarkan email dari tabel 'nilai'
        $nilai = DB::table('nilai')->where('email', $email)->first();

        // Jika data tidak ada, set nilai default 0
        $poin_dnd = $nilai->poin_DND ?? 0;
        $poin_tts = $nilai->poin_TTS ?? 0;
        $evaluasi = $nilai->evaluasi ?? 0;

        // Hitung aspek yang tersedia
        $aspek_tersedia = 0;
        if ($poin_dnd > 0) $aspek_tersedia++;
        if ($poin_tts > 0) $aspek_tersedia++;
        if ($evaluasi > 0) $aspek_tersedia++;

        // Jika ada aspek yang tersedia, hitung rata-rata poin
        $total_poin = $aspek_tersedia > 0 
            ? ($poin_dnd + $poin_tts + $evaluasi) / $aspek_tersedia 
            : 0;

        // Update nilai poin di tabel 'users' hanya jika peran adalah 'siswa'
        $user = DB::table('users')->where('email', $email)->first();
        if ($user && $user->role === 'siswa') {
            DB::table('users')->where('email', $email)->update(['poin' => $total_poin]);
        }
    }
}
