<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nilaiTest extends Controller
{
    public function test1(Request $request)
    {
        // Mengambil email pengguna yang sedang login
        $user_email = Auth::user()->email;
    }
}
