<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class LatihanController extends Controller
{
    //Database soal
    
    public function index(){
        
    

        return redirect()->route('latihan.show');
    }
    

    public function latihan(){
        
        
        return view('latihan.latihan');
    }
    public function kuis(){
        return view('latihan.kuis');
    }
    public function evaluasi(){
        $soal['soal'] = Soal::first();
        return view('latihan.evaluasi', $soal);
    }
    public function info(){
        return view('latihan.info');
    }
    public function dragndrop(){
        return view('latihan.dragndrop');
    }
}
