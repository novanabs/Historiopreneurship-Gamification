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
        Session::put('active_menu', 'dashboard');
        return view('dashboard');
    }

    public function showUser()
    {
        $data['users'] = User::all();
        return view('dashboard_admin',$data);
    }
}
