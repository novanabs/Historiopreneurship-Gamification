<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nilai;
use App\Models\Kelompok;
use App\Models\Refleksi;
use App\Models\AksesHalaman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use App\Models\AnalisisIndividuKesejarahan;
use App\Models\AnalisisKelompokKesejarahan;
use App\Models\AnalisisKelompokKewirausahaan;
use App\Models\Analisis_individu_kewirausahaan;


class HalamanController extends Controller
{
    function A () {
        $data['halaman_terbuka'] = 'A'; 
        $data['user'] = Auth::user()->email;
        $data['progress'] = 0;
        $data['materi_a'] = AksesHalaman::where('email', Auth::user()->email)->value('materi_a');
        return view('pages.A', $data);
    }

    function B () {
        $data['halaman_terbuka'] = 'B';
        $data['user'] = Auth::user()->email;
        $data['materi_b'] = AksesHalaman::where('email', Auth::user()->email)->value('materi_b');
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
        $data['user'] = Auth::user()->email;
        $data['materi_c'] = AksesHalaman::where('email', Auth::user()->email)->value('materi_c');
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
        $data['halaman_terbuka'] = 0;
        return view('pages.daftarPustaka', $data);
    }

    function materi()
    {
        return view('pages.materi');
    }

    function review()
    {
        $email = Auth::user()->email;
        $dataNilai = Nilai::where('email', $email)->get(['aspek', 'data_jawaban_penilai', 'nilai_akhir']);
    
        $hasData = $dataNilai->isNotEmpty();
    
        return view('pages.reviewGuru', compact('dataNilai', 'hasData'));
    }
}
