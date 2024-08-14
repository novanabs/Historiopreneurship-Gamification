<?php

namespace App\Http\Controllers;

use App\Models\Analisis_individu_kewirausahaan;
use App\Models\AnalisisIndividuKesejarahan;
use App\Models\AnalisisKelompokKesejarahan;
use App\Models\AnalisisKelompokKewirausahaan;
use App\Models\Kelompok;
use App\Models\Refleksi;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;


class HalamanController extends Controller
{
    function A()
    {
        return view('pages.A');
    }

    public function B()
    {
        // Dapatkan email pengguna yang sedang login
        $userEmail = Auth::user()->email;

        // Ambil jawaban individu yang sudah ada
        $jawabanIndividu = AnalisisIndividuKesejarahan::where('created_by', $userEmail)
            ->pluck('jawaban', 'aspek')
            ->toArray();

        // Ambil jawaban refleksi yang sudah ada berdasarkan email pengguna

        // Mengelompokkan jawaban berdasarkan kategori dan aspek
        $jawabanRefleksi = Refleksi::where('created_by', $userEmail)
            ->get()
            ->groupBy('kategori')
            ->map(function ($items) {
                return $items->keyBy('aspek');
            });

        // Dapatkan id_kelompok dari tabel kelompok berdasarkan email pengguna
        $kelompok = Kelompok::where('email', $userEmail)->first();

        // Cek jika kelompok ditemukan
        if ($kelompok) {
            $id_kelompok = $kelompok->id_kelompok;

            // Ambil semua anggota kelompok berdasarkan id_kelompok dengan join ke tabel users
            $anggotaKelompok = Kelompok::where('id_kelompok', $id_kelompok)
                ->join('users', 'kelompok.email', '=', 'users.email')
                ->select('kelompok.*', 'users.nama_lengkap')
                ->get(); // Convert to collection

            // Ambil jawaban berdasarkan id_kelompok
            $jawabanKelompok = AnalisisKelompokKesejarahan::where('id_kelompok', $id_kelompok)->get();
        } else {
            $id_kelompok = null;
            $anggotaKelompok = collect(); // Kosongkan jika id_kelompok tidak ditemukan
            $jawabanKelompok = collect(); // Kosongkan jika id_kelompok tidak ditemukan
        }

        return view('pages.B', compact('jawabanKelompok', 'id_kelompok', 'anggotaKelompok', 'jawabanIndividu', 'jawabanRefleksi'));
    }
    public function C()
    {
        // Dapatkan email pengguna yang sedang login
        $userEmail = Auth::user()->email;
    
        // Ambil jawaban individu yang sudah ada
        $jawabanIndividu = Analisis_individu_kewirausahaan::where('created_by', $userEmail)
            ->pluck('jawaban', 'aspek')
            ->toArray();
    
        // Mengelompokkan jawaban berdasarkan kategori dan aspek
        $jawabanRefleksi = Refleksi::where('created_by', $userEmail)
            ->get()
            ->groupBy('kategori')
            ->map(function ($items) {
                return $items->keyBy('aspek');
            });
    
        // Dapatkan id_kelompok dari tabel kelompok berdasarkan email pengguna
        $kelompok = Kelompok::where('email', $userEmail)->first();
    
        if ($kelompok) {
            $id_kelompok = $kelompok->id_kelompok;
    
            // Ambil semua anggota kelompok berdasarkan id_kelompok dengan join ke tabel users
            $anggotaKelompok = Kelompok::where('id_kelompok', $id_kelompok)
                ->join('users', 'kelompok.email', '=', 'users.email')
                ->select('kelompok.*', 'users.nama_lengkap')
                ->get(); // Convert to collection
    
            // Ambil jawaban berdasarkan id_kelompok untuk halaman C
            $jawabanKelompok = AnalisisKelompokKewirausahaan::where('id_kelompok', $id_kelompok)->get();
        } else {
            $id_kelompok = null;
            $anggotaKelompok = collect(); // Kosongkan jika id_kelompok tidak ditemukan
            $jawabanKelompok = collect(); // Kosongkan jika id_kelompok tidak ditemukan
        }
    
        return view('pages.C', compact('jawabanKelompok', 'id_kelompok', 'anggotaKelompok', 'jawabanIndividu', 'jawabanRefleksi'));
    }
    

    function daftarPustaka()
    {
        return view('pages.daftarPustaka');
    }

    function materi () {
        return view('pages.materi');
    }
}
