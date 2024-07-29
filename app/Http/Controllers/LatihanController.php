<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LatihanController extends Controller
{
    //Database soal

    public function index(){
        Session::put('soal_sekarang', 0);
        Session::put('nilai', 0);
        Session::put('jawaban', []);

        return redirect()->route('latihan.show');
    }
    

    public function latihan(){
        $soal['soal'] = Soal::first();
        $_SESSION['soal_sekarang'] = 0;
        $_SESSION['jawaban'] = 0;
        $_SESSION['nilai'] = 0;
        
        return view('latihan.latihan', $soal);
    }
    public function kuis(){
        return view('latihan.kuis');
    }
    public function evaluasi(){
        return view('latihan.evaluasi');
    }
    public function info(){
        return view('latihan.info');
    }
    public function dragndrop(){
        return view('latihan.dragndrop');
    }
}
