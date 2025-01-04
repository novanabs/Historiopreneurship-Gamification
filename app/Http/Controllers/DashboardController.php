<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nilai;
use App\Models\userBadge;
use App\Models\AksesHalaman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        $email = auth()->user()->email;
        
        // Data tambahan untuk dashboard
        $data['activeMenu'] = 'active';
        $data['users'] = User::where('peran', 'siswa')
            ->whereNotNull('poin')
            ->orderBy('poin', 'desc')
            ->get();
        $data['materi_a'] = AksesHalaman::where('email', $email)->value('materi_a');
        $data['materi_b'] = AksesHalaman::where('email', $email)->value('materi_b');
        $data['materi_c'] = AksesHalaman::where('email', $email)->value('materi_c');

        // Badge Kesejarahan
        $badgeKWUId = 4; // ID untuk badge "kwu"
        $userBadgeKWU = userBadge::where('email', $email)->where('id_badge', $badgeKWUId)->first();
        $data['badgeKwuClaimed'] = $userBadgeKWU ? $userBadgeKWU->status === 'claimed' : false;

        // Badge Kesejarahan
        $badgeTamat = 5; // ID untuk badge "kwu"
        $userTamat = userBadge::where('email', $email)->where('id_badge', $badgeTamat)->first();
        $data['badgeTamatClaimed'] = $userTamat ? $userTamat->status === 'claimed' : false;
        
        // Badge Kesejarahan
        $badgeKesejarahanId = 2; // ID untuk badge "Master"
        $userBadgeKesejarahan = userBadge::where('email', $email)->where('id_badge', $badgeKesejarahanId)->first();
        $data['badgeKesejarahanClaimed'] = $userBadgeKesejarahan ? $userBadgeKesejarahan->status === 'claimed' : false;
        
        // Badge High Rank
        $highRankBadgeId = 1; // ID untuk badge "High Rank"
        $userRank = User::whereNotNull('poin')
            ->orderBy('poin', 'desc')
            ->pluck('email')
            ->search($email) + 1; // Peringkat dimulai dari 1
        
        // Cek status badge High Rank
        $userBadgeHighRank = userBadge::where('email', $email)->where('id_badge', $highRankBadgeId)->first();
        $data['highRankBadgeClaimed'] = $userBadgeHighRank ? $userBadgeHighRank->status === 'claimed' : false;
        $data['eligibleForHighRankBadge'] = $userRank <= 3;
        
        // Ambil lama waktu pengerjaan dari tabel nilai
        $lamaWaktuPengerjaan = Nilai::where('email', $email)->value('lama_waktu_pengerjaan');
        
        // Badge siCepat
        $siCepatBadgeId = 3; // ID untuk badge "siCepat"
        if ($lamaWaktuPengerjaan !== null && $lamaWaktuPengerjaan <= 600) {
            $userBadgeSiCepat = userBadge::where('email', $email)->where('id_badge', $siCepatBadgeId)->first();
            $data['siCepatBadgeClaimed'] = $userBadgeSiCepat ? $userBadgeSiCepat->status === 'claimed' : false;
        } else {
            $data['siCepatBadgeClaimed'] = false;
        }
        
        // Ambil badge yang diklaim
        $claimedBadges = userBadge::where('email', $email)
            ->join('badge', 'user_badge.id_badge', '=', 'badge.id')
            ->select('badge.link_gambar', 'badge.deskripsi')
            ->get();

        //leaderboard
        $data['leaderboard'] = DB::table('users')
        ->join('nilai', 'users.email', '=', 'nilai.email')
        ->select('users.email', 'users.nama_lengkap', DB::raw('SUM(nilai.nilai_akhir) as poin'))
        ->where('users.peran', 'siswa') // Hanya ambil siswa
        ->groupBy('users.email', 'users.nama_lengkap') // Mengelompokkan berdasarkan email dan nama_lengkap
        ->orderBy('poin', 'desc') // Urutkan berdasarkan total poin
        ->limit(20) // Ambil 20 besar
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
