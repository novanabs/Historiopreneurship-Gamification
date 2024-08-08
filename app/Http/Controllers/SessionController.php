<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function laman(Request $request){
        // Mendefinisikan A B C tertutup

        // Simpan status sidebar di session
        Session::put('sidebar_status', $request->input('status'));
        Session::put('active_menu', $request->input('menu'));
        Session::put('active_menu_sub', '');


        // Redirect ke halaman yang diinginkan
        return redirect()->back();
    }
    public function lamanSub(Request $request){

        // Simpan status sidebar di session
        Session::put('sidebar_status_sub', $request->input('statusSub'));
        Session::put('active_menu_sub', $request->input('menuSub'));

        // dd(Session::all());


        // Redirect ke halaman yang diinginkan
        return redirect()->back();
    }
}
