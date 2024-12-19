<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Refleksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Analisis_individu_kewirausahaan;

class ContentCController extends Controller
{
    public function preTest()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Refleksi"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/KWU-dan-Kepariwisataan";
        $activeMenu = 'menu3';

        $batas_test = Nilai::where('email', $user)
            ->where('aspek', 'pre_test_kwu')
            ->first();

        if ($batas_test) {
            $skor_test_value = $batas_test->nilai_akhir;
            // Jika data sudah ada (batas_test ditemukan), set menjadi 0
            $batas_test_value = 0;
        } else {
            $skor_test_value = "-";
            // Jika data tidak ada, set menjadi 1
            $batas_test_value = 1;
        }
        return view('content-C.preTest', compact('activeMenu','prevUrl','nextUrl','user','batas_test_value','skor_test_value'));
    }
    
    public function kwuDanKepariwisataan()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Pre-Test"; 
        // $nextUrl = "/KWU-dan-Kepariwisataan/Kuis";
        $nextUrl = "/KWU-dan-Kepariwisataan/Proyek-Individu";
        $activeMenu = 'menu3';
        return view('content-C.kwuDanKepariwisataan', compact('activeMenu','prevUrl','nextUrl','user'));
    }
    
    public function kuisKwuDanKepariwisataan()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/KWU-dan-Kepariwisataan"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Analisis-Kelompok-1";
        $activeMenu = 'menu3';
        return view('content-C.kuisKwuDanKepariwisataan', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function analisisKelompok1()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Kuis"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Analisis-Kelompok-2";
        $activeMenu = 'menu3';
        return view('content-C.analisisKelompok1', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function analisisKelompok2()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Analisis-Kelompok-1"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Diskusi-Kelompok";
        $activeMenu = 'menu3';
        return view('content-C.analisisKelompok2', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function diskusiKelompok()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Analisis-Kelompok-2"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Proyek-Individu";
        $activeMenu = 'menu3';
        return view('content-C.diskusiKelompok', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function proyekIndividu()
    {
        $filename = "PROYEK_INDIVIDU_HISTORIOPRENEURSHIP.docx";
        $user = Auth::user()->email;
        // $prevUrl = "/KWU-dan-Kepariwisataan/Diskusi-Kelompok"; 
        $prevUrl = "/KWU-dan-Kepariwisataan/KWU-dan-Kepariwisataan"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Refleksi-1";
        $activeMenu = 'menu3';

        // Ambil jawaban individu yang sudah ada
        $jawabanIndividu = Analisis_individu_kewirausahaan::where('created_by', $user)
        ->pluck('jawaban', 'aspek')
        ->toArray();

        return view('content-C.proyekIndividu', compact('activeMenu','prevUrl','nextUrl','user','filename','jawabanIndividu'));
    }

    public function refleksi1()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Proyek-Individu"; 
        // $nextUrl = "/KWU-dan-Kepariwisataan/Praktik-Lapangan-1";
        $nextUrl = "/KWU-dan-Kepariwisataan/Post-Test";
        $activeMenu = 'menu3';

        // Ambil jawaban refleksi dan pastikan jika tidak ada data, tetap hasilkan collection
        $jawabanRefleksi = Refleksi::where('created_by', $user)
        ->get()
        ->groupBy('kategori')
        ->map(function ($items) {
            return $items->keyBy('aspek');
        });

        // Pastikan jawabanRefleksi bukan null dan set sebagai collection jika kosong
        if (!$jawabanRefleksi || $jawabanRefleksi->isEmpty()) {
            $jawabanRefleksi = collect();
        }
        return view('content-C.refleksi1', compact('activeMenu','prevUrl','nextUrl','user','jawabanRefleksi'));
    }

    public function praktikLapangan1()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Refleksi-1"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Praktik-Lapangan-2";
        $activeMenu = 'menu3';
        return view('content-C.praktikLapangan1', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function praktikLapangan2()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Praktik-Lapangan-1"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Post-Test";
        $activeMenu = 'menu3';
        return view('content-C.praktikLapangan2', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function postTest()
    {
        $user = Auth::user()->email;
        // $prevUrl = "/KWU-dan-Kepariwisataan/Praktik-Lapangan-2"; 
        $prevUrl = "/KWU-dan-Kepariwisataan/Refleksi-1"; 
        // $nextUrl = "/KWU-dan-Kepariwisataan/Refleksi-2";
        $nextUrl = null;
        $activeMenu = 'menu3';

        $batas_test = Nilai::where('email', $user)
            ->where('aspek', 'post_test_kwu')
            ->first();

        if ($batas_test) {
            $skor_test_value = $batas_test->nilai_akhir;
            // Jika data sudah ada (batas_test ditemukan), set menjadi 0
            $batas_test_value = 0;
        } else {
            $skor_test_value = "-";
            // Jika data tidak ada, set menjadi 1
            $batas_test_value = 1;
        }
        
        return view('content-C.postTest', compact('activeMenu','prevUrl','nextUrl','user','batas_test_value','skor_test_value'));
    }

    public function refleksi2()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Post-Test"; 
        $nextUrl = null;
        $activeMenu = 'menu3';
        return view('content-C.refleksi2', compact('activeMenu','prevUrl','nextUrl','user'));
    }
}
