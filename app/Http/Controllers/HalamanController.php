<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class HalamanController extends Controller
{
    function A () {
        return view('pages.A');
    }

    function B () {
        return view('pages.B');
    }

    function C () {
        return view('pages.C');
    }

    function daftarPustaka () {
        return view('pages.daftarPustaka');
    }
}
