<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LatihanController extends Controller
{
    //Database soal
    

    public function latihan(){
        $soal['soal'] = Soal::find('123');
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
}
