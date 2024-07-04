<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function showUser()
    {
        $data['users'] = User::all();
        return view('data_user',$data);
    }
}
