<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function latihan(){
        return view('latihan.latihan');
    }
    public function kuis(){
        return view('latihan.kuis');
    }
    public function evaluasi(){
        return view('latihan.evaluasi');
    }
}
