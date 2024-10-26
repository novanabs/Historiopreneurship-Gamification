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
        $pretestKesejarahan = DB::table('nilai')->where('email', $email)->where('aspek', 'pre_test_kesejarahan')->first();
        $posttestKesejarahan = DB::table('nilai')->where('email', $email)->where('aspek', 'post_test_kesejarahan')->first();

        // Jika data tidak ada, set nilai default 0
        $poin_dnd = $nilai_dnd->nilai_akhir ?? 0; // Ganti 'nilai_akhir' sesuai dengan nama kolom yang tepat
        $poin_tts = $nilai_tts->nilai_akhir ?? 0; // Ganti 'nilai_akhir' sesuai dengan nama kolom yang tepat
        $evaluasi = $nilai_evaluasi->nilai_akhir ?? 0; // Ganti 'nilai_akhir' sesuai dengan nama kolom yang tepat
        $pretestKesejarahan = $pretestKesejarahan->nilai_akhir ?? 0; // Ganti 'nilai_akhir' sesuai dengan nama kolom yang tepat
        $posttestKesejarahan = $posttestKesejarahan->nilai_akhir ?? 0; // Ganti 'nilai_akhir' sesuai dengan nama kolom yang tepat
        

        // Hitung aspek yang tersedia
        $aspek_tersedia = 0;
        if ($poin_dnd > 0)
            $aspek_tersedia++;
        if ($poin_tts > 0)
            $aspek_tersedia++;
        if ($evaluasi > 0)
            $aspek_tersedia++;
        if ($pretestKesejarahan > 0)
            $aspek_tersedia++;
        if ($posttestKesejarahan > 0)
            $aspek_tersedia++;
        // Jika ada aspek yang tersedia, hitung rata-rata poin
        $total_poin = $aspek_tersedia > 0
            ? ($poin_dnd + $poin_tts + $evaluasi + $pretestKesejarahan + $posttestKesejarahan) / $aspek_tersedia
            : 0;

        
        // Update nilai poin di tabel 'users' hanya jika peran adalah 'siswa'
        $user = DB::table('users')->where('email', $email)->first();
        if ($user && $user->peran === 'siswa') {
            DB::table('users')->where('email', $email)->update(['poin' => $total_poin]);
        }
    }
}
