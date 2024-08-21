<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    public function dataMahasiswa()
    {
        // Mengambil semua data kelompok beserta pengguna yang ada di dalamnya
        $Kelompoks = Kelompok::with('users')->get();
        $Mahasiswas = User::where('peran', 'siswa')->get(); // Filter users based on role
        return view('lamanDosen.dataMahasiswa', compact('Mahasiswas', 'Kelompoks'));
    }

    public function saveGroup(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'id_kelompok' => 'required|integer|min:1|max:4', // Assuming you have groups 1 to 4
        ]);

        // Find or create the Kelompok record based on the provided email and id_kelompok
        $kelompok = Kelompok::where('email', $request->email)->first();

        if ($kelompok) {
            // Update existing record
            $kelompok->update(['id_kelompok' => $request->id_kelompok]);
        } else {
            // Create a new record
            Kelompok::create([
                'email' => $request->email,
                'id_kelompok' => $request->id_kelompok,
            ]);
        }

        return redirect()->route('dataMahasiswa')->with('success', 'Kelompok berhasil diupdate!');
    }

    public function removeFromGroup(Request $request)
    {
        $email = $request->input('email');

        // Temukan kelompok berdasarkan email mahasiswa
        $kelompok = Kelompok::where('email', $email)->first();

        if ($kelompok) {
            // Hapus jawaban yang terkait dengan created_by di analisis_kelompok_kesejarahan
            \DB::table('analisis_kelompok_kesejarahan')->where('created_by', $kelompok->email)->delete();
            \DB::table('analisis_kelompok_kewirausahaan')->where('created_by', $kelompok->email)->delete();
            // Jika mahasiswa ada dalam kelompok, hapus ID kelompok
            $kelompok->id_kelompok = null;
            $kelompok->save();
        }

        return redirect()->route('dataMahasiswa')->with('status', 'Mahasiswa berhasil dikeluarkan dari kelompok');
    }

    public function dataKelas()
    {
        return view('lamanDosen.dataKelas');
    }

    public function dataLatihan()
    {
        return view('lamanDosen.dataLatihan');
    }

    public function dataNilai()
    {
        // Mengambil semua data kelompok beserta pengguna yang ada di dalamnya
        $Kelompoks = Kelompok::with('users')->orderBy('id_kelompok', 'asc')->get();
        // Mengambil data mahasiswa berdasarkan peran 'siswa'
        $Mahasiswas = User::where('peran', 'siswa')->get();

        // Mengirimkan kedua variabel ke view
        return view('lamanDosen.dataNilai', compact('Mahasiswas', 'Kelompoks'));
    }


    public function autoAssignGroup()
    {
        // Calculate the maximum number of students per group
        $maxStudentsPerGroup = 4;

        // Get all students with null id_kelompok
        $studentsWithNullGroup = Kelompok::whereNull('id_kelompok')->get();

        // Get all groups with less than the maximum number of students
        $availableGroups = Kelompok::select('id_kelompok')
            ->groupBy('id_kelompok')
            ->havingRaw('COUNT(*) < ?', [$maxStudentsPerGroup])
            ->pluck('id_kelompok')
            ->toArray();

        // Handle students with null id_kelompok
        foreach ($studentsWithNullGroup as $kelompokEntry) {
            // Check if there are available groups
            if (!empty($availableGroups)) {
                $groupId = array_shift($availableGroups); // Get the first available group
                $kelompokEntry->update(['id_kelompok' => $groupId]);

                // Check if the group is now full
                if (Kelompok::where('id_kelompok', $groupId)->count() >= $maxStudentsPerGroup) {
                    // Remove the group from available groups if it's now full
                    $availableGroups = array_diff($availableGroups, [$groupId]);
                }
            } else {
                // Create a new group if there are no available groups
                $newGroupId = Kelompok::max('id_kelompok') + 1;
                $kelompokEntry->update(['id_kelompok' => $newGroupId]);

                // Add the new group to available groups
                $availableGroups[] = $newGroupId;
            }
        }

        // Get all students who do not yet belong to a group or have a null group ID
        $studentsWithoutGroup = User::where('peran', 'siswa')
            ->whereDoesntHave('kelompok')
            ->get();

        // Handle remaining students
        foreach ($studentsWithoutGroup as $student) {
            // Check if there are available groups
            if (!empty($availableGroups)) {
                $groupId = array_shift($availableGroups); // Get the first available group
                Kelompok::create([
                    'email' => $student->email,
                    'id_kelompok' => $groupId
                ]);

                // Check if the group is now full
                if (Kelompok::where('id_kelompok', $groupId)->count() >= $maxStudentsPerGroup) {
                    // Remove the group from available groups if it's now full
                    $availableGroups = array_diff($availableGroups, [$groupId]);
                }
            } else {
                // Create a new group if there are no available groups
                $newGroupId = Kelompok::max('id_kelompok') + 1;
                Kelompok::create([
                    'email' => $student->email,
                    'id_kelompok' => $newGroupId
                ]);

                // Add the new group to available groups
                $availableGroups[] = $newGroupId;
            }
        }

        return redirect()->route('dataMahasiswa')->with('success', 'Kelompok berhasil diatur otomatis!');
    }


}