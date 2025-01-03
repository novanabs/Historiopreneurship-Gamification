<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Kelompok;
use App\Models\Refleksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\AnalisisKelompokKewirausahaan;
use App\Models\Analisis_individu_kewirausahaan;

class ContentCController extends Controller
{
    public function preTest()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Refleksi"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/KWU-dan-Kepariwisataan";
        $activeMenu = 'menu3';

        $batas_test = Nilai::where('email', $user)
            ->where('aspek', 'pre_test_kwu')
            ->first();

        if ($batas_test) {
            $skor_test_value = $batas_test->nilai_akhir;
            // Jika data sudah ada (batas_test ditemukan), set menjadi 0
            $batas_test_value = 0;
        } else {
            $skor_test_value = "-";
            // Jika data tidak ada, set menjadi 1
            $batas_test_value = 1;
        }
        return view('content-C.preTest', compact('activeMenu','prevUrl','nextUrl','user','batas_test_value','skor_test_value'));
    }
    
    public function kwuDanKepariwisataan(Request $request)
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Pre-Test"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Kuis";
        // $nextUrl = "/KWU-dan-Kepariwisataan/Proyek-Individu";

        // Ambil nomor halaman dari query string, default ke 1
        $page = $request->input('page', 1);
        
        // Teks yang akan dibagi
        $content = ['
            <p>
    <b>CPMK:</b>
</p>
<ol>
    <li>
        Mahasiswa mampu menguraikan perspektif terkait pemasaran kewirausahaan kesejarahan melalui diskusi kelompok dan pakar.
    </li>
    <li>
        Mahasiswa mampu merancang produk dan jasa terkait kewirausahaan kesejarahan berdasarkan konsep kewirausahaan.
    </li>
    <li>
        Mahasiswa memiliki keterampilan memasarkan produk dan jasa terkait kewirausahaan kesejarahan berdasarkan hasil praktik lapangan.
    </li>
</ol>
<p class="kotak">
    <b>PERTANYAAN PEMANTIK</b> <br> Adakah di antara kalian yang pernah berbelanja online? Berapa rata-rata pengeluaran per bulan jika berbelanja online? <br> <b>Tips untuk dosen:</b> <br>Dalam melakukan pembelajaran ini, dosen dapat menayangkan sebuah video tentang pemasaran yang menggunakan teknologi, misal pemasaran pada Amazon.com, Alibaba, Lazada, shopee, Tokopedia, bukalapak, dan lain-lain.
</p>
<p>
    Secara etimologi, kewirausahaan berasal dari kata wira dan usaha. Wira berarti peluang, pahlawan, manusia unggul, teladan, berbudi luhur, gagah berani, dan berwatak agung. Sedangkan menurut Kamus Besar Bahasa Indonesia, wirausaha adalah orang yang pandai atau berbakat mengenali produk baru, menentukan cara produksi baru, menyusun operasi untuk mengadakan produk baru, mengatur permodalan operasinya, serta memasarkannya (Rusdiana, 2014).
</p>
<p>
    Wirausaha adalah orang yang mendirikan, mengelola, mengembangkan dan melembagakan perusahaan miliknya atau kemampuan yang dimiliki oleh seseorang untuk melihat dan menilai kesempatan-kesempatan bisnis, mengumpulkan sumber daya- sumber daya yang dibutuhkan untuk mengambil tindakan yang tepat dan mengmbil keuntungn dalam rangka meraih sukses (Sukamdani, 2013). Menurut Zimmerer dan Scrbrough, wirausahawan adalah orang yang menciptakan bisnis baru dengan mengambil risiko dan ketidakpastian demi mencapai keuntungan dan pertumbuhan dengan cara mengidentifikasi peluang dan menggabungkan sumber daya yang diperlukan (Fahmi, 2014).
</p>
<p>
    Kewirausahaan adalah suatu ilmu yang mengkaji tentang pengembangan dan pembangunan semangat kreatifitas serta berani menanggung risiko terhadap pekerjaan yang dilakukan demi mewujudkan hasil karya tersebut (Fahmi, 2014). Keberanian mengambil risiko sudah menjadi milik seorang wirausahawan karena dituntut untuk berani dan siap jika usaha yang dilakukan tersebut belum mmeiliki nilai perhatian dipasar. Peran dari seorang wirausaha menurut Suryana memiliki dua peran yaitu sebagai penemu dan sebagai perencana. Sebagai penemu wirausaha menemukan dan menciptakan produk baru, teknologi dan cara baru, ideide baru dan organisasi usaha baru. Sebagai perencana, wirausaha berperan merancang usaha baru, merencakan strategi perusahaan baru, merencakan ideide dan peluang dalam perusahaan.
</p>
<p>
    Peter F. Drucker menjelaskan konsep kewirausahaan merujuk pada sifat, watak, dan ciri-ciri yang melekat pada seseorang yang mempunyai kemauan keras untuk mewujudkan gagasan inovatif ke dalam dunia usaha yang nyata dan dapat mengembangkannya dengan tangguh. Dan menurut Zimmerer kewirausahaan adalah penerapan kreativitas dan inovasi untuk memecahkan masalah dan upaya memanfaatkan peluang yang dihadapi setiap hari.
</p>','
<p>
    Kewirausahaan merupakan gabungan dari kreativitas, inovasi dan keberanian menghadapi resiko yang dilakukan dengan cara kerja keras untuk membentuk dan memelihara usaha baru (Suryana, 2014). Nilai-nilai hakiki kewirausahaan menurut Suryana (2014) yaitu:

</p>
<ol type="a">
    <li class="mb-2">
        Percaya diri <br> Merupakan suatu paduan sikap dan kenyakinan seseorang dalam menghadapi tugas atau pekerjaan. Kepercayaan diri merupakan landasan yang kuat untuk meningkatkan karsa dan karya seseorang. Orang yang percaya diri memiliki kemampuan untuk menyelesaikan pekerjaan dengan sistematis, berencana, efektif, dan efisien. Seperti percaya diri dalam menentukan sesuatu, percaya diri dalam menjalankan sesuatu, percaya diri bahwa kita dapat mengatasi berbagai risiko yang dihadapi merupakan faktor yang mendasar yang harus dimiliki oleh wirausaha. Seseorang yang memiliki jiwa wirausaha merasa yakin bahwa apa-apa yang diperbuatnya akan berhasil walaupun akan menghadapi berbagai rintangan. Tidak selalu dihantui rasa takut akan kegagalan sehingga membuat dirinya optimis untuk terus maju.
    </li>
    <li class="mb-2">
        Kepemimpinan <br> Sifat kepemimpinan memang ada dalam diri masing- masing individu dan sifat tersebut juga harus melekat pada diri wirausahawan. Wirausahawan adalah seseorang yang akan memimpin jalannya sebuah usaha, wirausahawan harus bisa memimpin pekerjaannya karena kepemimpinan merupakan faktor kunci menjadi wirausahawan sukses.
    </li>
    <li class="mb-2">
        Berorientasi ke masa depan <br> Orang yang berorientasi ke masa depan adalah orang yang memiliki perspektif dan pandangan ke masa depan. Meskipun terdapat resiko yang mungkin terjadi, ia tetap tabah untuk mencari peluang dan tantangan demi pembaharuan masa depan. Pandangan yang jauh ke depan membuat wirausahawan tidak cepat puas dengan karsa dan karya yang sudah ada saat ini.
    </li>
    <li class="mb-2">
        Berani mengambil resiko <br> Kemauan dan kemampuan untuk menghadapi risiko merupakan salah satu nilai utama dalam kewirausahaan. wirausahawan yang tidak mau menghadapi risiko akan sukar memulai atau berinisiatif. Menurut Angelita S. Bajaro, seorang wirausahawan yang berani menanggung resiko adalah orang yang selalu ingin jadi pemenang dan memenangkan dengan cara yang baik.
    </li>
    <li class="mb-2">
        Keorisinalitas (kreativitas dan inovasi) <br> Kreativitas adalah kemampuan untuk berpikir yang baru dan berbeda, sedangkan inovasi adalah kemampuan untuk bertindak yang baru dan berbeda. Menurut Hardvards Theodore Levitt menjelaskan inovasi dan kreativitas lebih mengarah pada konsep berpikir dan bertindak yang baru. Kreatifitas adalah kemampuan menciptakan gagasan dan menemukan cara baru dalam melihat permasalahan dan peluang yang ada. Sementara inovasi adalah kemampuan mengaplikasikan solusi yang kreatif terhadap permasalahan dan peluang yang ada untuk lebih memakmurkan kehidupan masyarakat. Jadi, kreativitas adalah kemampuan menciptakan gagasan baru, sedangkan inovasi adalah melakukan sesuatu yang baru.
    </li>
    <li class="mb-2">
        Berorientasi pada tugas dan hasil. <br> Seseorang yang selalu mengutamakan tugas dan hasil adalah orang yang selalu mengutamakan nilai-nilai motif berprestasi, berorientasi pada keberhasilan, ketekunan dan ketabahan, tekad kerja keras, mempunyai dorongan kuat, energik, dan berinisiatif. Berinisiatif artinya selalu ingin mencari dan memulai. Dalam kewirausahaan, peluang hanya diperoleh apabila terdapat inisiatif. Perilaku inisiatif ini biasanya diperoleh melalui pelatihan dan pengalaman selama bertahun-tahun, dan pengembangannya diperoleh dengan cara disiplin diri, berpikir kritis, tanggap dan semangat berprestasi (Suryana, 2014). <br> Wirausaha berbasis sejarah penting untuk dikembangkan karena telah dibuktikan oleh beberapa orang jika dengan mengembangkan wirausaha berbasis sejarah seseorang dapat meraih kesuksesan (Mursal dkk, 2022). Seorang wirausaha berbasis sejarah adalah seseorang yang dapat menjual produk berdasarkan penelitian sejarah dan memiliki jiwa kewirausahaan.
    </li>
</ol>'
        ];

        // Hitung total halaman
        $totalPages = ceil(count($content) / 1); // Setiap halaman menampilkan 1 konten
        
        // Validasi halaman
        if ($page < 1 || $page > $totalPages) {
            $page = 1; // Set ke halaman 1 jika halaman tidak valid
        }
        
        // Ambil konten untuk halaman saat ini
        $start = ($page - 1) * 1; // Setiap halaman menampilkan 1 konten
        $currentContent = array_slice($content, $start, 1);


        $activeMenu = 'menu3';
        return view('content-C.kwuDanKepariwisataan', compact('activeMenu','prevUrl','nextUrl','user','currentContent', 'totalPages', 'page'));
    }
    
    public function kuisKwuDanKepariwisataan()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/KWU-dan-Kepariwisataan"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Analisis-Kelompok-1";

        $batas_test = Nilai::where('email', $user)
            ->where('aspek', 'poin_DND_KWU')
            ->first();

        if ($batas_test) {
            $skor_test_value = $batas_test->nilai_akhir;
            // Jika data sudah ada (batas_test ditemukan), set menjadi 0
            $batas_test_value = 0;
        } else {
            $skor_test_value = "-";
            // Jika data tidak ada, set menjadi 1
            $batas_test_value = 1;
        }

        $activeMenu = 'menu3';
        return view('content-C.kuisKwuDanKepariwisataan', compact('activeMenu','prevUrl','nextUrl','user','batas_test_value','skor_test_value'));
    }

    public function analisisKelompok1()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Kuis"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Analisis-Kelompok-2";
        $activeMenu = 'menu3';

         // Dapatkan id_kelompok dari tabel kelompok berdasarkan email pengguna
         $kelompok = Kelompok::where('email', $user)->first();
 
         if ($kelompok) {
             $id_kelompok = $kelompok->id_kelompok;
 
             // Ambil semua anggota kelompok berdasarkan id_kelompok dengan join ke tabel users
             $anggotaKelompok = Kelompok::where('id_kelompok', $id_kelompok)
                 ->join('users', 'kelompok.email', '=', 'users.email')
                 ->select('kelompok.*', 'users.nama_lengkap')
                 ->get(); // Convert to collection
 
             // Ambil jawaban berdasarkan id_kelompok untuk halaman C
             $jawabanKelompok = AnalisisKelompokKewirausahaan::where('id_kelompok', $id_kelompok)->get();
         } else {
             $id_kelompok = null;
             $anggotaKelompok = collect(); // Kosongkan jika id_kelompok tidak ditemukan
             $jawabanKelompok = collect(); // Kosongkan jika id_kelompok tidak ditemukan
         };

            return view('content-C.analisisKelompok1', compact('activeMenu','prevUrl','nextUrl','user','jawabanKelompok', 'id_kelompok', 'anggotaKelompok'));
    }

    public function analisisKelompok2()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Analisis-Kelompok-1"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Diskusi-Kelompok";
        $activeMenu = 'menu3';

        // Dapatkan id_kelompok dari tabel kelompok berdasarkan email pengguna
        $kelompok = Kelompok::where('email', $user)->first();
 
        if ($kelompok) {
            $id_kelompok = $kelompok->id_kelompok;

            // Ambil semua anggota kelompok berdasarkan id_kelompok dengan join ke tabel users
            $anggotaKelompok = Kelompok::where('id_kelompok', $id_kelompok)
                ->join('users', 'kelompok.email', '=', 'users.email')
                ->select('kelompok.*', 'users.nama_lengkap')
                ->get(); // Convert to collection

            // Ambil jawaban berdasarkan id_kelompok untuk halaman C
            $jawabanKelompok = AnalisisKelompokKewirausahaan::where('id_kelompok', $id_kelompok)->get();
        } else {
            $id_kelompok = null;
            $anggotaKelompok = collect(); // Kosongkan jika id_kelompok tidak ditemukan
            $jawabanKelompok = collect(); // Kosongkan jika id_kelompok tidak ditemukan
        };

        return view('content-C.analisisKelompok2', compact('activeMenu','prevUrl','nextUrl','user','jawabanKelompok', 'id_kelompok', 'anggotaKelompok'));
    }

    public function diskusiKelompok()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Analisis-Kelompok-2"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Proyek-Individu";
        $activeMenu = 'menu3';

        // Dapatkan id_kelompok dari tabel kelompok berdasarkan email pengguna
        $kelompok = Kelompok::where('email', $user)->first();
 
        if ($kelompok) {
            $id_kelompok = $kelompok->id_kelompok;

            // Ambil semua anggota kelompok berdasarkan id_kelompok dengan join ke tabel users
            $anggotaKelompok = Kelompok::where('id_kelompok', $id_kelompok)
                ->join('users', 'kelompok.email', '=', 'users.email')
                ->select('kelompok.*', 'users.nama_lengkap')
                ->get(); // Convert to collection

            // Ambil jawaban berdasarkan id_kelompok untuk halaman C
            $jawabanKelompok = AnalisisKelompokKewirausahaan::where('id_kelompok', $id_kelompok)->get();
        } else {
            $id_kelompok = null;
            $anggotaKelompok = collect(); // Kosongkan jika id_kelompok tidak ditemukan
            $jawabanKelompok = collect(); // Kosongkan jika id_kelompok tidak ditemukan
        };

        return view('content-C.diskusiKelompok', compact('activeMenu','prevUrl','nextUrl','user','jawabanKelompok', 'id_kelompok', 'anggotaKelompok'));
    }

    public function proyekIndividu()
    {
        $filename = "PROYEK_INDIVIDU_HISTORIOPRENEURSHIP.docx";
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Diskusi-Kelompok"; 
        // $prevUrl = "/KWU-dan-Kepariwisataan/KWU-dan-Kepariwisataan"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Refleksi-1";
        $activeMenu = 'menu3';

        // Ambil jawaban individu yang sudah ada
        $jawabanIndividu = Analisis_individu_kewirausahaan::where('created_by', $user)
        ->pluck('jawaban', 'aspek')
        ->toArray();

        return view('content-C.proyekIndividu', compact('activeMenu','prevUrl','nextUrl','user','filename','jawabanIndividu'));
    }

    public function refleksi1()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Proyek-Individu"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Praktik-Lapangan-1";
        // $nextUrl = "/KWU-dan-Kepariwisataan/Post-Test";
        $activeMenu = 'menu3';

        // Ambil jawaban refleksi dan pastikan jika tidak ada data, tetap hasilkan collection
        $jawabanRefleksi = Refleksi::where('created_by', $user)->where('kategori', 'refleksi kewirausahaan')
        ->get()
        ->groupBy('kategori')
        ->map(function ($items) {
            return $items->keyBy('aspek');
        });

        // Pastikan jawabanRefleksi bukan null dan set sebagai collection jika kosong
        if (!$jawabanRefleksi || $jawabanRefleksi->isEmpty()) {
            $jawabanRefleksi = collect();
        }
        return view('content-C.refleksi1', compact('activeMenu','prevUrl','nextUrl','user','jawabanRefleksi'));
    }

    public function praktikLapangan1()
    {
        $user = Auth::user()->email; // Mendapatkan email pengguna saat ini
        $prevUrl = "/KWU-dan-Kepariwisataan/Refleksi-1"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Praktik-Lapangan-2";
        $activeMenu = 'menu3';
    
        // Mengambil file yang diunggah untuk kategori 'praktik lapangan 1' oleh pengguna
        $uploadedFile = \DB::table('upload_file_tugas')
            ->where('kategori', 'praktik lapangan 1')
            ->where('created_by', $user) // Sesuaikan jika hanya file pengguna ini yang ingin ditampilkan
            ->first();
    
        return view('content-C.praktikLapangan1', compact('activeMenu', 'prevUrl', 'nextUrl', 'user', 'uploadedFile'));
    }
    
    public function praktikLapangan2()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Praktik-Lapangan-1"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Post-Test";
        $activeMenu = 'menu3';
        return view('content-C.praktikLapangan2', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function postTest()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Praktik-Lapangan-2"; 
        // $prevUrl = "/KWU-dan-Kepariwisataan/Refleksi-1"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Refleksi-2";
        // $nextUrl = null;
        $activeMenu = 'menu3';

        $batas_test = Nilai::where('email', $user)
            ->where('aspek', 'post_test_kwu')
            ->first();

        if ($batas_test) {
            $skor_test_value = $batas_test->nilai_akhir;
            // Jika data sudah ada (batas_test ditemukan), set menjadi 0
            $batas_test_value = 0;
        } else {
            $skor_test_value = "-";
            // Jika data tidak ada, set menjadi 1
            $batas_test_value = 1;
        }
        
        return view('content-C.postTest', compact('activeMenu','prevUrl','nextUrl','user','batas_test_value','skor_test_value'));
    }

    public function refleksi2()
    {
        $user = Auth::user()->email;
        $prevUrl = "/KWU-dan-Kepariwisataan/Post-Test"; 
        $nextUrl = null;
        $activeMenu = 'menu3';

        // Ambil jawaban refleksi dan pastikan jika tidak ada data, tetap hasilkan collection
        $jawabanRefleksi = Refleksi::where('created_by', $user)->where('kategori', 'refleksi kepariwisataan')
        ->get()
        ->groupBy('kategori')
        ->map(function ($items) {
            return $items->keyBy('aspek');
        });

        // Pastikan jawabanRefleksi bukan null dan set sebagai collection jika kosong
        if (!$jawabanRefleksi || $jawabanRefleksi->isEmpty()) {
            $jawabanRefleksi = collect();
        }

        return view('content-C.refleksi2', compact('activeMenu','prevUrl','nextUrl','user','jawabanRefleksi'));
    }
}
