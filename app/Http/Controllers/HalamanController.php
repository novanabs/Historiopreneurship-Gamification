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
    function A () {
        $data['halaman_terbuka'] = 'A'; 
        $data['user'] = 'UDIN'; 
        return view('pages.A', $data);
    }

    function B () {
        $data['halaman_terbuka'] = 'B';
        $userEmail = Auth::user()->email;
    
        $jawabanIndividu = AnalisisIndividuKesejarahan::where('created_by', $userEmail)
            ->pluck('jawaban', 'aspek')
            ->toArray();
    
        // Ambil jawaban refleksi dan pastikan jika tidak ada data, tetap hasilkan collection
        $jawabanRefleksi = Refleksi::where('created_by', $userEmail)
            ->get()
            ->groupBy('kategori')
            ->map(function ($items) {
                return $items->keyBy('aspek');
            });
    
        // Pastikan jawabanRefleksi bukan null dan set sebagai collection jika kosong
        if (!$jawabanRefleksi || $jawabanRefleksi->isEmpty()) {
            $jawabanRefleksi = collect();
        }
    
        $kelompok = Kelompok::where('email', $userEmail)->first();
    
        if ($kelompok) {
            $id_kelompok = $kelompok->id_kelompok;
            $anggotaKelompok = Kelompok::where('id_kelompok', $id_kelompok)
                ->join('users', 'kelompok.email', '=', 'users.email')
                ->select('kelompok.*', 'users.nama_lengkap')
                ->get();
    
            $jawabanKelompok = AnalisisKelompokKesejarahan::where('id_kelompok', $id_kelompok)->get();
        } else {
            $id_kelompok = null;
            $anggotaKelompok = collect();
            $jawabanKelompok = collect();
        }
    
        return view('pages.B', compact('jawabanKelompok', 'id_kelompok', 'anggotaKelompok', 'jawabanIndividu', 'jawabanRefleksi'), $data);
    }

    function C () {
        $data['halaman_terbuka'] = 'C';
         // Dapatkan email pengguna yang sedang login
         $userEmail = Auth::user()->email;

         // Ambil jawaban individu yang sudah ada
         $jawabanIndividu = Analisis_individu_kewirausahaan::where('created_by', $userEmail)
             ->pluck('jawaban', 'aspek')
             ->toArray();
 
         // Ambil jawaban refleksi dan pastikan jika tidak ada data, tetap hasilkan collection
         $jawabanRefleksi = Refleksi::where('created_by', $userEmail)
             ->get()
             ->groupBy('kategori')
             ->map(function ($items) {
                 return $items->keyBy('aspek');
             });
     
         // Pastikan jawabanRefleksi bukan null dan set sebagai collection jika kosong
         if (!$jawabanRefleksi || $jawabanRefleksi->isEmpty()) {
             $jawabanRefleksi = collect();
         }
 
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
 
         return view('pages.C', compact('jawabanKelompok', 'id_kelompok', 'anggotaKelompok', 'jawabanIndividu', 'jawabanRefleksi'),$data);
    }


    function daftarPustaka()
    {
        return view('pages.daftarPustaka');
    }

    function materi()
    {
        return view('pages.materi');
    }
}
