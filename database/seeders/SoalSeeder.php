<?php

namespace Database\Seeders;

use App\Models\Soal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Soal::create([
            'judul_soal' => 'Kesejarahan',
            'data_soal' => '[{"pilihan": [{"id": 1, "teks": "Sukarno", "benar_salah": true}, {"id": 2, "teks": "Suharto", "benar_salah": false}, {"id": 3, "teks": "Habibie", "benar_salah": false}, {"id": 4, "teks": "Megawati", "benar_salah": false}], "pertanyaan": "Siapakah presiden pertama Republik Indonesia?"}, {"pilihan": [{"id": 1, "teks": "1942", "benar_salah": false}, {"id": 2, "teks": "1945", "benar_salah": true}, {"id": 3, "teks": "1950", "benar_salah": false}, {"id": 4, "teks": "1960", "benar_salah": false}], "pertanyaan": "Pada tahun berapakah Perang Dunia II berakhir?"}, {"pilihan": [{"id": 1, "teks": "1942", "benar_salah": false}, {"id": 2, "teks": "1945", "benar_salah": true}, {"id": 3, "teks": "1947", "benar_salah": false}, {"id": 4, "teks": "1950", "benar_salah": false}], "pertanyaan": "Peristiwa Rengasdengklok terjadi pada tahun berapa?"}, {"pilihan": [{"id": 1, "teks": "Sukarno", "benar_salah": true}, {"id": 2, "teks": "Mohammad Hatta", "benar_salah": false}, {"id": 3, "teks": "Achmad Soebardjo", "benar_salah": false}, {"id": 4, "teks": "Sayuti Melik", "benar_salah": false}], "pertanyaan": "Siapa penulis naskah proklamasi kemerdekaan Indonesia?"}, {"pilihan": [{"id": 1, "teks": "Jakarta", "benar_salah": true}, {"id": 2, "teks": "Bandung", "benar_salah": false}, {"id": 3, "teks": "Surabaya", "benar_salah": false}, {"id": 4, "teks": "Yogyakarta", "benar_salah": false}], "pertanyaan": "Dimanakah tempat dilaksanakannya Sumpah Pemuda pada tahun 1928?"}]',
            'KKM' => '70',
            'arahan' => '{"lolos": "Selamat! Anda lolos.", "tidak_lolos": "Anda belum lolos!"}',
            'created_by' => 'Admin'
        ]);
    }
}
