<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\Nilai;
use App\Models\userBadge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userBadgeController extends Controller
{
    public function awardMasterBadge(Request $request)
    {
        $email = Auth::user()->email;
    
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
    
        // Hitung jumlah aspek yang terpenuhi
        $fulfilledAspectsCount = Nilai::where('email', $email)
            ->whereIn('aspek', $aspects)
            ->where('nilai_akhir', '>=', 70)
            ->distinct('aspek')
            ->count();
    
        // Tentukan apakah semua aspek terpenuhi
        $allAspectsFulfilled = $fulfilledAspectsCount === count($aspects);
    
        if ($allAspectsFulfilled) {
            $badge = Badge::find(12); // Asumsikan badge dengan id 12 adalah "master" badge
    
            if ($badge) {
                userBadge::updateOrCreate(
                    ['email' => $email, 'id_badge' => $badge->id],
                    ['email' => $email, 'id_badge' => $badge->id, 'status' => 'claimed'] // Status klaim diatur ke 'claimed'
                );
                return redirect()->route('dashboard.index')->with('success', 'Master Badge successfully claimed!');
            }
        }
    
        // Jika tidak memenuhi syarat, beri tahu pengguna
        return redirect()->route('dashboard.index')->with('error', 'You do not meet the criteria for the Master Badge.');
    }
    
    public function awardPenguasaMateriBadge(Request $request)
    {
        $email = Auth::user()->email;

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

        // Ambil nilai dari setiap aspek yang ada
        $totalNilai = Nilai::where('email', $email)
            ->whereIn('aspek', $aspects)
            ->sum('nilai_akhir');

        // Hitung jumlah aspek yang ada nilainya
        $fulfilledAspectsCount = Nilai::where('email', $email)
            ->whereIn('aspek', $aspects)
            ->whereNotNull('nilai_akhir')
            ->distinct('aspek')
            ->count();

        // Pastikan jumlah aspek yang terpenuhi sesuai jumlah aspek yang harus dicek
        if ($fulfilledAspectsCount === count($aspects)) {
            // Hitung rata-rata nilai dari semua aspek
            $average = $totalNilai / count($aspects);

            // Tentukan badge berdasarkan rata-rata nilai
            if ($average >= 90) {
                $badgeId = 14; // Badge untuk nilai >= 90
            } elseif ($average >= 80) {
                $badgeId = 15; // Badge untuk nilai >= 80
            } else {
                $badgeId = 16; // Badge untuk nilai < 80
            }

            // Cek apakah badge tersedia
            $badge = Badge::find($badgeId);

            if ($badge) {
                userBadge::updateOrCreate(
                    ['email' => $email, 'id_badge' => $badge->id],
                    ['email' => $email, 'id_badge' => $badge->id,'status' => 'claimed']
                );

                return redirect()->route('dashboard.index')->with('success', 'Badge Penguasa Materi successfully claimed!');
            }
        }

        // Jika tidak memenuhi syarat, pastikan badge_claimed tidak diset dan beri tahu pengguna
        return redirect()->route('dashboard.index')->with('error', 'You do not meet the criteria for the Badge Penguasa Materi.');
    }

}
