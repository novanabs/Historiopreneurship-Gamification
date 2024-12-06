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
        $data['activeMenu'] = 'active';
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
        
        if ($data['allAspectsFulfilled']) {
            // Hitung rata-rata nilai
            $average = $totalNilai / count($aspects);
            
            // Tentukan ID badge berdasarkan rata-rata nilai
            if ($average >= 90) {
                $badgeIdPenguasaMateri = 4; // Badge untuk nilai >= 90
            } elseif ($average >= 80) {
                $badgeIdPenguasaMateri = 5; // Badge untuk nilai >= 80
            } else {
                $badgeIdPenguasaMateri = 6; // Badge untuk nilai < 80
            }
    
            // Badge Penguasa materi
            $userBadgePenguasaMateri = userBadge::where('email', $email)->where('id_badge', $badgeIdPenguasaMateri)->first();
            $data['badgePenguasaMateriClaimed'] = $userBadgePenguasaMateri ? $userBadgePenguasaMateri->status === 'claimed' : false;
        } else {
            // Jika tidak memenuhi syarat, atur rata-rata nilai ke null
            $average = null;
            $data['badgePenguasaMateriClaimed'] = false;
        }
        
        // Badge Master
        $badgeMasterId = 2; // ID untuk badge "Master"
        $userBadgeMaster = userBadge::where('email', $email)->where('id_badge', $badgeMasterId)->first();
        $data['badgeMasterClaimed'] = $userBadgeMaster ? $userBadgeMaster->status === 'claimed' : false;
        
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
        
        $data['claimedBadges'] = $claimedBadges;
        return view('dashboard', $data);
    }
    
    



    public function showUser()
    {
        $data['users'] = User::all();
        return view('dashboard_admin', $data);
    }
}
