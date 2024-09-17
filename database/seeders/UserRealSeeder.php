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
            'nama_lengkap' => 'Administrator',
            'no_hp' => '081',
            'peran' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Dijalan'
        ]);

        User::create([
            'nama_lengkap' => 'Guru',
            'no_hp' => '082',
            'peran' => 'guru',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('123456789'),
            'alamat' => 'Dijalan'
        ]);
        User::create([
            'nama_lengkap' => 'Madhan',
            'no_hp' => '0811',
            'peran' => 'siswa',
            'kelas' => 'A1',
            'email' => 'madhan@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2134,
        ]);
        User::create([
            'nama_lengkap' => 'Salman',
            'no_hp' => '0812',
            'peran' => 'siswa',
            'kelas' => 'A1',
            'email' => 'salman@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2130,
        ]);
        User::create([
            'nama_lengkap' => 'Husna',
            'no_hp' => '0813',
            'peran' => 'siswa',
            'kelas' => 'A1',
            'email' => 'husna@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2122,
        ]);
        User::create([
            'nama_lengkap' => 'Iif',
            'no_hp' => '0814',
            'peran' => 'siswa',
            'kelas' => 'A1',
            'email' => 'iif@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2120,
        ]);
        User::create([
            'nama_lengkap' => 'Rifqi',
            'no_hp' => '0815',
            'peran' => 'siswa',
            'kelas' => 'A2',
            'email' => 'rifqi@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2103,
        ]);
        User::create([
            'nama_lengkap' => 'Ari',
            'no_hp' => '0816',
            'peran' => 'siswa',
            'kelas' => 'A2',
            'email' => 'ari@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2078,
        ]);
        User::create([
            'nama_lengkap' => 'Fadhil',
            'no_hp' => '0817',
            'peran' => 'siswa',
            'kelas' => 'A2',
            'email' => 'fadhil@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2068,
        ]);
        User::create([
            'nama_lengkap' => 'Fajar',
            'no_hp' => '0818',
            'peran' => 'siswa',
            'kelas' => 'A2',
            'email' => 'fajar@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 2000,
        ]);
        User::create([
            'nama_lengkap' => 'Saipul',
            'no_hp' => '0819',
            'peran' => 'siswa',
            'kelas' => 'A2',
            'email' => 'saipul@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 1994,
        ]);
        User::create([
            'nama_lengkap' => 'Fuad',
            'no_hp' => '0810',
            'peran' => 'siswa',
            'kelas' => 'A1',
            'email' => 'fuad@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan',
            'poin' => 1800,
        ]);
    }
}
