<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentCController extends Controller
{
    public function preTest()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Refleksi"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/KWU-dan-Kepariwisataan";
        $activeMenu = 'menu3';
        return view('content-C.preTest', compact('activeMenu','prevUrl','nextUrl','user'));
    }
    
    public function kwuDanKepariwisataan()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Pre-Test"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Kuis";
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
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Diskusi-Kelompok"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Refleksi-1";
        $activeMenu = 'menu3';
        return view('content-C.proyekIndividu', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function refleksi1()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Proyek-Individu"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Praktik-Lapangan-1";
        $activeMenu = 'menu3';
        return view('content-C.refleksi1', compact('activeMenu','prevUrl','nextUrl','user'));
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
        $prevUrl = "/KWU-dan-Kepariwisataan/Praktik-Lapangan-2"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Refleksi-2";
        $activeMenu = 'menu3';
        return view('content-C.postTest', compact('activeMenu','prevUrl','nextUrl','user'));
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
