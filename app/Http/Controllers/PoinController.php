<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoinController extends Controller
{
    public function DND(Request $request){
        $user_email = Auth::user()->email;
        $poin = User::where('email',$user_email)->first();
        if($poin->poin_DND <= (int)$request->poin){
            if ($poin) {
                $poin->poin_DND = (int)$request->poin; // Update nilai poin
                $poin->save(); // Simpan perubahan ke database
            }
        }

        return redirect()->back()->with('success', 'Poin berhasil diperbarui');
    }

    public function TTS(Request $request){
        $user_email = Auth::user()->email;
        $poin = User::where('email',$user_email)->first();
        if($poin->poin_TTS <= (int)$request->poin){
            if ($poin) {
                $poin->poin_TTS = (int)$request->poin; // Update nilai poin
                $poin->save(); // Simpan perubahan ke database
            }
        }

        return redirect()->back()->with('success', 'Poin berhasil diperbarui');
    }
}