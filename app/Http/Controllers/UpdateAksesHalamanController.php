<?php

namespace App\Http\Controllers;

use App\Models\AksesHalaman;
use Illuminate\Http\Request;

class UpdateAksesHalamanController extends Controller
{
    function updateA (Request $request, $id){
        dd($request);
        

        // Cari item berdasarkan ID
        $halaman = AksesHalaman::find($id);

        // Cek apakah item ditemukan
        if ($halaman) {
            // Tambah nilai count
            $halaman->count += 1;

            // Simpan perubahan ke database
            $halaman->save();

            // Redirect atau return response
            return redirect()->back()->with('success', 'Count berhasil ditambah');
        } else {
            // Jika item tidak ditemukan, beri respon error
            return redirect()->back()->with('error', 'Item tidak ditemukan');
        }
    }
}
