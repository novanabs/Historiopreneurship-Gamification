<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // User::create([
        //     'nama_lengkap' => 'Administrator',
        //     'no_hp' => '081',
        //     'peran' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('12345678'),
        //     'alamat' => 'Dijalan'
        // ]);

        // User::create([
        //     'nama_lengkap' => 'Guru',
        //     'no_hp' => '082',
        //     'peran' => 'guru',
        //     'email' => 'guru@gmail.com',
        //     'password' => Hash::make('12345678'),
        //     'alamat' => 'Dijalan'
        // ]);

        User::create([
            'nama_lengkap' => 'Siswa',
            'no_hp' => '083',
            'peran' => 'siswa',
            'email' => 'siswa@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Dijalan'
        ]);

    }
}
