<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class HalamanController extends Controller
{
    function A () {
        $data['halaman_terbuka'] = 'A'; 
        return view('pages.A', $data);
    }

    function B () {
        $data['halaman_terbuka'] = 'B';
        return view('pages.B', $data);
    }

    function C () {
        $data['halaman_terbuka'] = 'C';
        return view('pages.C', $data);
    }

    function daftarPustaka () {
        return view('pages.daftarPustaka');
    }

    function materi () {
        return view('pages.materi');
    }
}
