<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama_lengkap' => 'Madhan',
            'no_hp' => '0811',
            'peran' => 'siswa',
            'email' => 'madhan@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2134,
        ]);
        User::create([
            'nama_lengkap' => 'Salman',
            'no_hp' => '0812',
            'peran' => 'siswa',
            'email' => 'salman@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2130,
        ]);
        User::create([
            'nama_lengkap' => 'Husna',
            'no_hp' => '0813',
            'peran' => 'siswa',
            'email' => 'husna@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2122,
        ]);
        User::create([
            'nama_lengkap' => 'Iif',
            'no_hp' => '0814',
            'peran' => 'siswa',
            'email' => 'iif@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2120,
        ]);
        User::create([
            'nama_lengkap' => 'Rifqi',
            'no_hp' => '0815',
            'peran' => 'siswa',
            'email' => 'rifqi@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2103,
        ]);
        User::create([
            'nama_lengkap' => 'Ari',
            'no_hp' => '0816',
            'peran' => 'siswa',
            'email' => 'ari@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2078,
        ]);
        User::create([
            'nama_lengkap' => 'Fadhil',
            'no_hp' => '0817',
            'peran' => 'siswa',
            'email' => 'fadhil@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2068,
        ]);
        User::create([
            'nama_lengkap' => 'Fajar',
            'no_hp' => '0818',
            'peran' => 'siswa',
            'email' => 'fajar@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2000,
        ]);
        User::create([
            'nama_lengkap' => 'Saipul',
            'no_hp' => '0819',
            'peran' => 'siswa',
            'email' => 'saipul@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 1994,
        ]);
        User::create([
            'nama_lengkap' => 'Fuad',
            'no_hp' => '0810',
            'peran' => 'siswa',
            'email' => 'fuad@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 1800,
        ]);
    }
}
