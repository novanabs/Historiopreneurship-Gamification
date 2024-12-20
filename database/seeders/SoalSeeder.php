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
            'data_soal' => '[
    {
        "pertanyaan": "Di mana letak Makam Pangeran Antasari?",
        "pilihan": [
            { "id": 1, "teks": "Jakarta", "benar_salah": false },
            { "id": 2, "teks": "Banjarmasin", "benar_salah": true },
            { "id": 3, "teks": "Samarinda", "benar_salah": false },
            { "id": 4, "teks": "Surabaya", "benar_salah": false },
            { "id": 5, "teks": "Bandung", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Museum Wasaka terletak di kota mana?",
        "pilihan": [
            { "id": 1, "teks": "Balikpapan", "benar_salah": false },
            { "id": 2, "teks": "Samarinda", "benar_salah": false },
            { "id": 3, "teks": "Banjarmasin", "benar_salah": true },
            { "id": 4, "teks": "Pontianak", "benar_salah": false },
            { "id": 5, "teks": "Palangka Raya", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Arti dari “Waja Sampai Ka Puting” dalam Bahasa Banjar adalah?",
        "pilihan": [
            { "id": 1, "teks": "Teguh sampai akhir", "benar_salah": true },
            {
                "id": 2,
                "teks": "Sejarah sampai selamanya",
                "benar_salah": false
            },
            {
                "id": 3,
                "teks": "Bersatu menuju kemenangan",
                "benar_salah": false
            },
            { "id": 4, "teks": "Setia sampai mati", "benar_salah": false },
            { "id": 5, "teks": "Berjuang tanpa henti", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Tugu 9 November didirikan untuk mengenang perjuangan rakyat Banjarmasin melawan penjajah pada tahun berapa?",
        "pilihan": [
            { "id": 1, "teks": "1945", "benar_salah": false },
            { "id": 2, "teks": "1946", "benar_salah": true },
            { "id": 3, "teks": "1947", "benar_salah": false },
            { "id": 4, "teks": "1948", "benar_salah": false },
            { "id": 5, "teks": "1949", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Tugu 9 November Banjarmasin memiliki bentuk seperti apa?",
        "pilihan": [
            {
                "id": 1,
                "teks": "Pahlawan sedang memegang bendera",
                "benar_salah": false
            },
            {
                "id": 2,
                "teks": "Pahlawan dengan pedang terhunus",
                "benar_salah": false
            },
            {
                "id": 3,
                "teks": "Menara yang menjulang tinggi",
                "benar_salah": true
            },
            {
                "id": 4,
                "teks": "Monumen berbentuk lingkaran",
                "benar_salah": false
            },
            {
                "id": 5,
                "teks": "Patung sepasang pejuang dengan senjata",
                "benar_salah": false
            }
        ]
    },
    {
        "pertanyaan": "Di mana lokasi Makam Surgi Mufti?",
        "pilihan": [
            { "id": 1, "teks": "Samarinda", "benar_salah": false },
            { "id": 2, "teks": "Banjarmasin", "benar_salah": true },
            { "id": 3, "teks": "Balikpapan", "benar_salah": false },
            { "id": 4, "teks": "Pontianak", "benar_salah": false },
            { "id": 5, "teks": "Palangkaraya", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Di kawasan mana Makam Surgi Mufti ini berada?",
        "pilihan": [
            { "id": 1, "teks": "Sungai Andai", "benar_salah": false },
            { "id": 2, "teks": "Kelayan", "benar_salah": false },
            { "id": 3, "teks": "Antasan Kecil Timur", "benar_salah": false },
            { "id": 4, "teks": "Kampung Melayu", "benar_salah": false },
            { "id": 5, "teks": "Kuin Utara", "benar_salah": true }
        ]
    },
    {
        "pertanyaan": "Di mana lokasi Masjid Jami Sungai Jingah?",
        "pilihan": [
            { "id": 1, "teks": "Banjarmasin", "benar_salah": true },
            { "id": 2, "teks": "Martapura", "benar_salah": false },
            { "id": 3, "teks": "Banjarbaru", "benar_salah": false },
            { "id": 4, "teks": "Samarinda", "benar_salah": false },
            { "id": 5, "teks": "Balikpapan", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Apa nama lain dari Masjid Jami Sungai Jingah?",
        "pilihan": [
            { "id": 1, "teks": "Masjid Sultan", "benar_salah": false },
            { "id": 2, "teks": "Masjid Raya", "benar_salah": false },
            { "id": 3, "teks": "Masjid Nurul Hidayah", "benar_salah": false },
            {
                "id": 4,
                "teks": "Masjid Sultan Suriansyah",
                "benar_salah": true
            },
            { "id": 5, "teks": "Masjid Al-Falah", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Siapa tokoh sejarah yang terkait dengan pendirian Masjid Jami Sungai Jingah?",
        "pilihan": [
            { "id": 1, "teks": "Sultan Suriansyah", "benar_salah": true },
            { "id": 2, "teks": "Sultan Adam", "benar_salah": false },
            { "id": 3, "teks": "Sultan Hasanuddin", "benar_salah": false },
            { "id": 4, "teks": "Pangeran Antasari", "benar_salah": false },
            { "id": 5, "teks": "Pangeran Diponegoro", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Masjid Jami Sungai Jingah merupakan salah satu masjid tertua di mana?",
        "pilihan": [
            { "id": 1, "teks": "Sumatra", "benar_salah": false },
            { "id": 2, "teks": "Kalimantan Selatan", "benar_salah": true },
            { "id": 3, "teks": "Sulawesi Selatan", "benar_salah": false },
            { "id": 4, "teks": "Jawa Barat", "benar_salah": false },
            { "id": 5, "teks": "Maluku", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Arsitektur Masjid Jami Sungai Jingah mengadopsi gaya apa?",
        "pilihan": [
            { "id": 1, "teks": "Modern minimalis", "benar_salah": false },
            { "id": 2, "teks": "Timur Tengah", "benar_salah": false },
            { "id": 3, "teks": "Tradisional Banjar", "benar_salah": true },
            { "id": 4, "teks": "Kolonial Belanda", "benar_salah": false },
            { "id": 5, "teks": "Jawa Kuno", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Bahan utama bangunan Masjid Jami Sungai Jingah terbuat dari apa?",
        "pilihan": [
            { "id": 1, "teks": "Batu bata", "benar_salah": false },
            { "id": 2, "teks": "Beton", "benar_salah": false },
            { "id": 3, "teks": "Kayu ulin", "benar_salah": true },
            { "id": 4, "teks": "Bambu", "benar_salah": false },
            { "id": 5, "teks": "Batu alam", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Masjid Sultan Suriansyah merupakan masjid tertua di mana?",
        "pilihan": [
            { "id": 1, "teks": "Kalimantan", "benar_salah": true },
            { "id": 2, "teks": "Sumatra", "benar_salah": false },
            { "id": 3, "teks": "Jawa", "benar_salah": false },
            { "id": 4, "teks": "Sulawesi", "benar_salah": false },
            { "id": 5, "teks": "Bali", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Siapakah yang mendirikan Masjid Sultan Suriansyah?",
        "pilihan": [
            { "id": 1, "teks": "Sultan Hasanuddin", "benar_salah": false },
            { "id": 2, "teks": "Sultan Suriansyah", "benar_salah": true },
            { "id": 3, "teks": "Sultan Adam", "benar_salah": false },
            { "id": 4, "teks": "Sultan Agung", "benar_salah": false },
            { "id": 5, "teks": "Sultan Mahmud", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Masjid Sultan Suriansyah memiliki gaya arsitektur yang dipengaruhi oleh?",
        "pilihan": [
            { "id": 1, "teks": "Gaya Jawa", "benar_salah": true },
            { "id": 2, "teks": "Gaya Eropa", "benar_salah": false },
            { "id": 3, "teks": "Gaya Arab", "benar_salah": false },
            { "id": 4, "teks": "Gaya Persia", "benar_salah": false },
            { "id": 5, "teks": "Gaya Melayu", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Makam Sultan Suriansyah dibangun pada abad ke-?",
        "pilihan": [
            { "id": 1, "teks": "14", "benar_salah": false },
            { "id": 2, "teks": "15", "benar_salah": false },
            { "id": 3, "teks": "16", "benar_salah": true },
            { "id": 4, "teks": "17", "benar_salah": false },
            { "id": 5, "teks": "18", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Dimanakah lokasi Makam Habib Basirih berada?",
        "pilihan": [
            {
                "id": 1,
                "teks": "Banjarmasin, Kalimantan Timur",
                "benar_salah": false
            },
            {
                "id": 2,
                "teks": "Banjarmasin, Kalimantan Selatan",
                "benar_salah": true
            },
            {
                "id": 3,
                "teks": "Samarinda, Kalimantan Timur",
                "benar_salah": false
            },
            {
                "id": 4,
                "teks": "Balikpapan, Kalimantan Selatan",
                "benar_salah": false
            },
            {
                "id": 5,
                "teks": "Pontianak, Kalimantan Barat",
                "benar_salah": false
            }
        ]
    },
    {
        "pertanyaan": "Apa nama asli dari Habib Basirih?",
        "pilihan": [
            {
                "id": 1,
                "teks": "Habib Abdurrahman Al-Habsyi",
                "benar_salah": false
            },
            {
                "id": 2,
                "teks": "Habib Muhammad Alaydrus",
                "benar_salah": false
            },
            { "id": 3, "teks": "Habib Abdullah Basirih", "benar_salah": false },
            {
                "id": 4,
                "teks": "Habib Ali Zainal Abidin",
                "benar_salah": false
            },
            {
                "id": 5,
                "teks": "Habib Ahmad bin Abdurrahman Al-Habsyi",
                "benar_salah": true
            }
        ]
    },
    {
        "pertanyaan": "Apa nama masjid terbesar di Banjarmasin yang menjadi ikon kota?",
        "pilihan": [
            { "id": 1, "teks": "Masjid Al-Falah", "benar_salah": false },
            { "id": 2, "teks": "Masjid Sabilal Muhtadin", "benar_salah": true },
            {
                "id": 3,
                "teks": "Masjid Raya Al-Munawwarah",
                "benar_salah": false
            },
            {
                "id": 4,
                "teks": "Masjid Agung Al-Karomah",
                "benar_salah": false
            },
            { "id": 5, "teks": "Masjid Jami Banjarmasin", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Masjid Sabilal Muhtadin terletak di dekat sungai apa?",
        "pilihan": [
            { "id": 1, "teks": "Sungai Martapura", "benar_salah": true },
            { "id": 2, "teks": "Sungai Barito", "benar_salah": false },
            { "id": 3, "teks": "Sungai Kapuas", "benar_salah": false },
            { "id": 4, "teks": "Sungai Mahakam", "benar_salah": false },
            { "id": 5, "teks": "Sungai Kahayan", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Siapakah nama ulama yang menjadi inspirasi penamaan Masjid Sabilal Muhtadin?",
        "pilihan": [
            { "id": 1, "teks": "Syekh Arsyad Al-Banjari", "benar_salah": true },
            { "id": 2, "teks": "KH Zaini Abdul Ghani", "benar_salah": false },
            {
                "id": 3,
                "teks": "Syekh Muhammad Syarwani Abdan",
                "benar_salah": false
            },
            {
                "id": 4,
                "teks": "Syekh Muhammad Nafis Al-Banjari",
                "benar_salah": false
            },
            {
                "id": 5,
                "teks": "Syekh Abdul Karim Banjarmasin",
                "benar_salah": false
            }
        ]
    },
    {
        "pertanyaan": "Masjid Sabilal Muhtadin diresmikan pada tahun berapa?",
        "pilihan": [
            { "id": 1, "teks": "1950", "benar_salah": false },
            { "id": 2, "teks": "1965", "benar_salah": false },
            { "id": 3, "teks": "1981", "benar_salah": true },
            { "id": 4, "teks": "1979", "benar_salah": false },
            { "id": 5, "teks": "1990", "benar_salah": false }
        ]
    },
    {
        "pertanyaan": "Siapakah nama ulama yang menjadi inspirasi penamaan Masjid Sabilal Muhtadin?",
        "pilihan": [
            { "id": 1, "teks": "Syekh Arsyad Al-Banjari", "benar_salah": true },
            { "id": 2, "teks": "KH Zaini Abdul Ghani", "benar_salah": false },
            {
                "id": 3,
                "teks": "Syekh Muhammad Syarwani Abdan",
                "benar_salah": false
            },
            {
                "id": 4,
                "teks": "Syekh Muhammad Nafis Al-Banjari",
                "benar_salah": false
            },
            {
                "id": 5,
                "teks": "Syekh Abdul Karim Banjarmasin",
                "benar_salah": false
            }
        ]
    },
    {
        "pertanyaan": "Masjid Sabilal Muhtadin diresmikan pada tahun berapa?",
        "pilihan": [
            { "id": 1, "teks": "1950", "benar_salah": false },
            { "id": 2, "teks": "1965", "benar_salah": false },
            { "id": 3, "teks": "1981", "benar_salah": true },
            { "id": 4, "teks": "1979", "benar_salah": false },
            { "id": 5, "teks": "1990", "benar_salah": false }
        ]
    }
]
',
            'KKM' => '70',
            'arahan' => '{"lolos": "Selamat! Anda lolos.", "tidak_lolos": "Anda belum lolos!"}',
            'created_by' => 'Admin'
        ]);
    }
}
