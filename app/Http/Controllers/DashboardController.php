<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\User;
use App\Models\AksesHalaman;
use App\Models\userBadge;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        $email = auth()->user()->email;

        // Data tambahan untuk dashboard
        $data['halaman_terbuka'] = 'dashboard';
        $data['users'] = User::where('peran', 'siswa')
            ->whereNotNull('poin')
            ->orderBy('poin', 'desc')
            ->get();
        $data['materi_a'] = AksesHalaman::where('email', $email)->value('materi_a');
        $data['materi_b'] = AksesHalaman::where('email', $email)->value('materi_b');
        $data['materi_c'] = AksesHalaman::where('email', $email)->value('materi_c');

        // Aspek yang harus dipenuhi
        $aspects = [
            'evaluasi',
            'analisa_individu_kesejarahan',
            'analisa_individu_kewirausahaan',
            'analisa_kelompok_kesejarahan',
            'analisa_kelompok_kewirausahaan_aktivitas1',
            'analisa_kelompok_kewirausahaan_aktivitas2',
            'analisa_kelompok_kewirausahaan_aktivitas3',
            'upload_file_pembelajaran3',
            'upload_file_aktivitas1',
            'upload_file_aktivitas2'
        ];

        // Hitung total nilai untuk aspek yang ada
        $totalNilai = Nilai::where('email', $email)
            ->whereIn('aspek', $aspects)
            ->sum('nilai_akhir');

        // Hitung jumlah aspek yang ada nilainya
        $fulfilledAspectsCount = Nilai::where('email', $email)
            ->whereIn('aspek', $aspects)
            ->whereNotNull('nilai_akhir')
            ->distinct('aspek')
            ->count();

        // Tentukan apakah semua aspek terpenuhi
        $data['allAspectsFulfilled'] = $fulfilledAspectsCount === count($aspects);

        // Badge Master
        $badgeMasterId = 12; // ID untuk badge "Master"
        $userBadgeMaster = userBadge::where('email', $email)->where('id_badge', $badgeMasterId)->first();
        $data['badgeMasterClaimed'] = $userBadgeMaster ? $userBadgeMaster->status === 'claimed' : false;

        // Badge Penguasa Materi
        if ($data['allAspectsFulfilled']) {
            // Hitung rata-rata nilai
            $average = $totalNilai / count($aspects);

            // Tentukan ID badge berdasarkan rata-rata nilai
            if ($average >= 90) {
                $badgeIdPenguasaMateri = 14; // Badge untuk nilai >= 90
            } elseif ($average >= 80) {
                $badgeIdPenguasaMateri = 15; // Badge untuk nilai >= 80
            } else {
                $badgeIdPenguasaMateri = 16; // Badge untuk nilai < 80
            }

            // Cek status badge dari tabel user_badge
            $userBadgePenguasaMateri = userBadge::where('email', $email)->where('id_badge', $badgeIdPenguasaMateri)->first();
            $data['badgePenguasaMateriClaimed'] = $userBadgePenguasaMateri ? $userBadgePenguasaMateri->status === 'claimed' : false;
        } else {
            $data['badgePenguasaMateriClaimed'] = false;
        }

        // Ambil badge yang diklaim
        $claimedBadges = userBadge::where('email', $email)
            ->join('badge', 'user_badge.id_badge', '=', 'badge.id')
            ->select('badge.link_gambar', 'badge.deskripsi')
            ->get();

        $data['claimedBadges'] = $claimedBadges;

        return view('dashboard', $data);
    }



    public function showUser()
    {
        $data['users'] = User::all();
        return view('dashboard_admin', $data);
    }
}
