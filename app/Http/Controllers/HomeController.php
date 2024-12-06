<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        $userRole = 'siswa';
        return view('home.beranda', compact('userRole'));
    }

    public function materi()
    {
        return view('home.materi');
    }

    public function perihal()
    {
        return view('home.perihal');
    }
}

