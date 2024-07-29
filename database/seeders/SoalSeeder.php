<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Soal::create([
            'judul_soal' => '',
            'data_soal' => '',
            'KKM' => '',
            'arahan' => '',
        ])
    }
}
