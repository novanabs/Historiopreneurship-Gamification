<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        $data['halaman_terbuka'] = 'dashboard';
        $data['users'] = User::where('peran', 'siswa')->whereNotNull('poin')->orderBy('poin', 'desc')->get();
        return view('dashboard', $data);
    }

    public function showUser()
    {
        $data['users'] = User::all();
        return view('dashboard_admin',$data);
    }
}
