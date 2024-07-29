<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    function dataKelas(){
        return view('lamanDosen.dataKelas');
    }
    function dataLatihan(){
        return view('lamanDosen.dataLatihan');
    }
    function dataMahasiswa(){
        return view('lamanDosen.dataMahasiswa');
    }
    function dataNilai(){
        return view('lamanDosen.dataNilai');
    }
}
