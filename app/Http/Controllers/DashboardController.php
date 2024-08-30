<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AksesHalaman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        $data['halaman_terbuka'] = 'dashboard';
        $data['users'] = User::where('peran', 'siswa')->whereNotNull('poin')->orderBy('poin', 'desc')->get();
        $data['materi_a'] = AksesHalaman::where('email', auth()->user()->email)->value('materi_a');
        $data['materi_b'] = AksesHalaman::where('email', auth()->user()->email)->value('materi_b');
        $data['materi_c'] = AksesHalaman::where('email', auth()->user()->email)->value('materi_c');
        return view('dashboard', $data);
    }

    public function showUser()
    {
        $data['users'] = User::all();
        return view('dashboard_admin',$data);
    }
}
