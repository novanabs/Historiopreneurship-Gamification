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
        $nilai_dnd = DB::table('nilai')->where('email', $email)->where('aspek', 'poin_DND')->first();
        $nilai_tts = DB::table('nilai')->where('email', $email)->where('aspek', 'poin_TTS')->first();
        $nilai_evaluasi = DB::table('nilai')->where('email', $email)->where('aspek', 'evaluasi')->first();
        $nilai_pre_test = DB::table('nilai')->where('email', $email)->where('aspek', 'pre_test_kesejarahan')->first();
        $nilai_post_test = DB::table('nilai')->where('email', $email)->where('aspek', 'post_test_kesejarahan')->first();

        // Jika data tidak ada, set nilai default 0
        $poin_dnd = $nilai_dnd->nilai_akhir ?? 0;
        $poin_tts = $nilai_tts->nilai_akhir ?? 0;
        $evaluasi = $nilai_evaluasi->nilai_akhir ?? 0;
        $pre_test = $nilai_pre_test->nilai_akhir ?? 0;
        $post_test = $nilai_post_test->nilai_akhir ?? 0;

        // Hitung aspek yang tersedia
        $aspek_tersedia = 0;
        if ($poin_dnd > 0)
            $aspek_tersedia++;
        if ($poin_tts > 0)
            $aspek_tersedia++;
        if ($evaluasi > 0)
            $aspek_tersedia++;
        if ($pre_test > 0)
            $aspek_tersedia++;
        if ($post_test > 0)
            $aspek_tersedia++;

        // Jika ada aspek yang tersedia, hitung rata-rata poin
        $total_poin = $aspek_tersedia > 0
            ? ($poin_dnd + $poin_tts + $evaluasi + $pre_test + $post_test) / $aspek_tersedia
            : 0;

        // Update nilai poin di tabel 'users' hanya jika peran adalah 'siswa'
        $user = DB::table('users')->where('email', $email)->first();
        if ($user && $user->peran === 'siswa') {
            DB::table('users')->where('email', $email)->update(['poin' => $total_poin]);
        }
    }

}
