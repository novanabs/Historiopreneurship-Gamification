<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentBController extends Controller
{
    public function preTest()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Informasi/Tahapan"; 
        $nextUrl = "/Kesejarahan/Kegiatan-Pembelajaran-1";
        $activeMenu = 'menu2';
        return view('content-B.preTest', compact('activeMenu','prevUrl','nextUrl','user'));
    }
    
    public function kegiatanPembelajaran1()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Pre-Test"; 
        $nextUrl = "/Kesejarahan/Kuis-Kesejarahan";
        $activeMenu = 'menu2';
        return view('content-B.kegiatanPembelajaran1', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function kuisKesejarahan()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Kegiatan-Pembelajaran-1"; 
        $nextUrl = "/Kesejarahan/Kegiatan-Pembelajaran-2";
        $activeMenu = 'menu2';
        return view('content-B.kuisKesejarahan', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function kegiatanPembelajaran2()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Kuis-Kesejarahan"; 
        $nextUrl = "/Kesejarahan/Analisis-Kelompok";
        $activeMenu = 'menu2';
        return view('content-B.kegiatanPembelajaran2', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function analisisKelompok()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Kegiatan-Pembelajaran-2"; 
        $nextUrl = "/Kesejarahan/Analisi-Individu";
        $activeMenu = 'menu2';
        return view('content-B.analisisKelompok', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function analisisIndividu()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Analisis-Kelompok"; 
        $nextUrl = "/Kesejarahan/Kegiatan-Pembelajaran-3";
        $activeMenu = 'menu2';
        return view('content-B.analisisIndividu', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function kegiatanPembelajaran3()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Analisi-Individu"; 
        $nextUrl = "/Kesejarahan/Post-Test";
        $activeMenu = 'menu2';
        return view('content-B.kegiatanPembelajaran3', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function postTest()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Kegiatan-Pembelajaran-3"; 
        $nextUrl = "/Kesejarahan/Refleksi";
        $activeMenu = 'menu2';
        return view('content-B.postTest', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function refleksi()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Post-Test"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Pre-Test";
        $activeMenu = 'menu2';
        return view('content-B.refleksi', compact('activeMenu','prevUrl','nextUrl','user'));
    }
}
