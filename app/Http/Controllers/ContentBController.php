<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Refleksi;
use Illuminate\Http\Request;
use App\Models\FormKelayakan;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\AnalisisIndividuKesejarahan;
use App\Models\AnalisisIndividuKesejeranhanII;

class ContentBController extends Controller
{
    public function preTest()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Informasi/Tahapan"; 
        $nextUrl = "/Kesejarahan/Kegiatan-Pembelajaran-1";
        $activeMenu = 'menu2';

        $batas_test = Nilai::where('email', $user)
            ->where('aspek', 'pre_test_kesejarahan')
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

        return view('content-B.preTest', compact('activeMenu','prevUrl','nextUrl','user','batas_test_value','skor_test_value'));
    }
    
    public function kegiatanPembelajaran1(Request $request)
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Pre-Test"; 
        $nextUrl = "/Kesejarahan/Kuis-Kesejarahan";
        $activeMenu = 'menu2';

        // Ambil nomor halaman dari query string, default ke 1
        $page = $request->input('page', 1);
        
        // Teks yang akan dibagi
        $content = [
            "<p>Sejarah sebagai salah satu bentuk peninggalan masa lalu yang harus tetap kita rawat sebagai ingatan kolektif manusia. Banyak peninggalan sejarah yang tersebar di berbagai sudut dunia, tak terkecuali di Kalimantan Selatan. Belajar sejarah bukan berarti hanya belajar tentang masa lalu yang tiada guna, namun akan memberikan manfaat untuk masa yang akan datang, karena sejarah merupakan dialog antara peristiwa masa lampau dan perkembangan di masa depan (Kochhar, 2008). Peninggalan tersebut salah satu bentuknya adalah bangunan bersejarah.</p>",
            "<p>Pariwisata di Indonesia mempunyai peluang besar karena memiliki daya tarik tersendiri dimana setiap tujuan wisatanya memiliki unsur-unsur budaya, atraksi dan sejarah dan setiap daerahnya memiliki ciri khas yang berbeda-beda. Undang-Undang Nomor 9 Tahun 1990 menjelaskan bahwa pengembangan pariwisata di Indonesia menggunakan konsep budaya atau culture tourism dengan mempertimbangkan potensi seni dan budaya yang beraneka ragam yang tersebar pada daerah tujuan wisata daerah wisata (Yoeti, 2006). Sejalan dengan Undang-Undang Nomor 10 Tahun 7 2009 yang menjelaskan bahwa peninggalan purbakala, peninggalan sejarah, seni dan budaya yang dimiliki oleh bangsa Indonesia merupakan sumber daya dan modal pembangunan kepariwisataan untuk meningkatkan kesejahteraan rakyat (Kirom, Sudarmiatin, & Putra, 2016).</p>",
            "<p>Peninggalan bersejarah mempunyai daya tarik yang besar yang dapat menarik wisatawan. Potensi pariwisata berbasis sejarah budaya merupakan salah satu aset yang memiliki potensi untuk dikembangkan oleh setiap daerah (Adi et al, 2013). Pengembangan potensi sektor pariwisata di daerah selain untuk menambah pendapatan daerah juga dapat memperkenalkan sejarah serta melestarikan budaya daerah wisata tersebut.</p>",
            "<p>Wisata sejarah adalah kegiatan wisata yang bertujuan untuk mengunjungi tempat-tempat yang memiliki nilai kesejarahan. Nilai kesejarahan yang terdapat pada daerah wisata itulah yang menjadi objek wisata sejarah yang ditawarkan. Objek wisata tersebut beberapa diantaranya adalah arsitektur bangunan, kebudayaan dan kepercayaan masa lampau (Ishak, 2020). Obyek wisata yang berupa tempat atau keadaan alam, tata hidup, seni budaya serta peninggalan sejarah bangsa perlu dikembangkan secara terencana serta inovatif karena obyek wisata ini merupakan titik sentral dari pengembangan pariwisata nasional (Suwena & Widyamatja, 2017).</p>",
            "<p>Daya tarik wisata sejarah adalah para wisatawan dapat menikmati keunikan dari keragaman budaya dan sejarah di daerah yang dikunjunginya. Tujuan dari wisata sejarah bagi para wisatawan adalah mempelajari budaya daerah untuk memenuhi kebutuhan serta kepuasan rekreasinya, selain itu mereka mendapatkan edukasi dari peristiwa sejarah dan budaya daerah wisata (Jamal, Bustami, & Desma). Dikemukakan oleh Irdika (Pusaka Budaya dan Pariwisata, 2007) terdapat 10 elemen budaya yang menjadi daya tarik wisata yakni: (1) Kerajinan, (2) tradisi, (3) sejarah, (4) arsitektur, (5) makanan lokal, (6) seni musik, (7) cara hidup masyarakat, (8) agama, (9) bahasa dan (10) pakaian lokal. Daya tarik wisata juga dipengaruhi oleh penyajian dari eksistensi dan keunikan dari obyek wisata yang ada yang dikemas menjadi ragam atraksi wisata yang menarik.</p>",
            "<p>Setiap daerah memiliki sejarah budaya yang unik sehingga menjadi karakteristik pembeda dengan daerah lain. Perbedaan karakteristik sejarah budaya tersebut merupakan potensi dari pariwisata sejarah di setiap daerah (Suyatmin & Edy, 2017). Penelitian yang dilakukan oleh Aziz (2018) menyimpulkan bahwa aspek daya tarik kota Banjarmasin salah satunya adalah wisata heritage dan peninggalan sejarah. Sebagai kota yang dijuluki sebagai kota seribu sungai, Banjarmasin juga dipenuhi dengan tempat-tempat bersejarah yang menjadi daya tarik wisatawan lokal maupun non lokal. Daya tarik wisata sejarah di kota Banjarmasin dipengaruhi oleh keberadaan sungai dan peninggalan sejarah kerajaan Banjar dan jaman pejuangannya. Sejarah kerajaan banjar juga memiliki nuansa Islami sehingga kebanyakan dari tempat bersejarah yang dikunjungi adalah masjid yang dibangun pada pemerintahan zaman dahulu yang masih dipelihara dengan menjaga bentuk aslinya serta makam keramat para wali yang berpengaruh menyebarkan agama Islam di Banjarmasin.</p>",
            "<p>Seperti yang terjadi pada obyek wisata pasar terapung di Kuin yang mengalami penurunan aksistensinya karena aktivitas dan kegiatan ekonomi masyarakat berpindah ke darat (Pradana, 2020). Dikembangkannya Pasar Terapung buatan di Siring Tandean juga membuat Pasar Terapung Muara Kuin semakin terpinggirkan. Masalah lain adalah kurangnya pengemasan daya tarik obyek wisata dimana seharusnya daerah tujuan wisata memiliki keunikan, kekhasan dan daya tarik tersendiri, baik berupa alam maupun masyarakat serta budayanya (Huiwen & Hassink, 2017). Selain itu faktor lingkungan di sekitar juga mempengaruhi seperti jalan yang sempit, kondisi lingkungan dan fasilitas yang kurang memadai, serta waktu menikmati wisata terbatas dari pukul 03.00 dini hari hingga pukul 07.00 pagi WITA saja. Penurunan keberadaan obyek wisata Pasar Terapung Kuin juga menyebabkan hilangnya nilai-nilai sosial dan budaya yang terkandung di dalam Pasar Terapung itu sendiri (Gibson, 2015).</p>",
            "<p>Peninggalan bersejarah mempunyai daya tarik yang besar yang juga dapat menarik wisatawan mancanegara. Sehingga untuk mengembangkan wisata sejarah Kota Banjarmasin dengan memberdayakan elemen dan lansekap budaya sebagai objek wisata serta nilai-nilai kultural yang terdapat di Kota Banjarmasin, diperlukan sebuah identifikasi guna menemukan potensi objek wisata sejarah berdasarkan kelayakan lanskap untuk selanjutnya diketahui strategi pengembangan berdasarkan variabel kelayakan lanskap yang perlu dioptimalkan guna meningkatkan kesejahteraan kota dan masyarakat.</p>"
        ];

        // Hitung total halaman
        $totalPages = ceil(count($content) / 3);
        
        // Ambil konten untuk halaman saat ini
        $start = ($page - 1) * 3;
        $currentContent = array_slice($content, $start, 3);

        return view('content-B.kegiatanPembelajaran1', compact('activeMenu','prevUrl','nextUrl','user','currentContent', 'totalPages', 'page'));
    }

    public function kuisKesejarahan()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Kegiatan-Pembelajaran-1"; 
        $nextUrl = "/Kesejarahan/Kegiatan-Pembelajaran-2";
        $activeMenu = 'menu2';

        $batas_test = Nilai::where('email', $user)
            ->where('aspek', 'poin_DND_Kesejarahan')
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


        return view('content-B.kuisKesejarahan', compact('activeMenu','prevUrl','nextUrl','user','batas_test_value','skor_test_value'));
    }

    public function kegiatanPembelajaran2()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Kuis-Kesejarahan"; 
        $nextUrl = "/Kesejarahan/Analisis-Kelompok";
        $activeMenu = 'menu2';
        return view('content-B.kegiatanPembelajaran2', compact('activeMenu','prevUrl','nextUrl','user'));
    }

    public function analisisKelompok()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Kegiatan-Pembelajaran-2"; 
        $nextUrl = "/Kesejarahan/Analisi-Individu";
        $activeMenu = 'menu2';

        // Retrieve individual answers from AnalisisIndividuKesejarahanII
        $jawabanIndividuII = AnalisisIndividuKesejeranhanII::where('created_by', $user)->get();

        return view('content-B.analisisKelompok', compact('activeMenu','prevUrl','nextUrl','user','jawabanIndividuII'));
    }

    public function analisisIndividu()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Analisis-Kelompok"; 
        $nextUrl = "/Kesejarahan/Kegiatan-Pembelajaran-3";
        $activeMenu = 'menu2';

        $jawabanIndividu = AnalisisIndividuKesejarahan::where('created_by', $user)->get();

        if(!$jawabanIndividu->isEmpty()){
        
        $statusJawabanIndividu = "Selesai";

        // Menggunakan optional untuk menghindari error
        $objekWisata = optional($jawabanIndividu[0])->jawaban ?? '';
        $objekKesejarahan = optional($jawabanIndividu[1])->jawaban ?? '';
        $urgensiObjekKesejarahan = optional($jawabanIndividu[2])->jawaban ?? '';
        $urgensiKesejarahan = optional($jawabanIndividu[3])->jawaban ?? '';

        } else {
            $statusJawabanIndividu = "Belum dikerjakan";
            $objekWisata = '';
            $objekKesejarahan = '';
            $urgensiObjekKesejarahan = '';
            $urgensiKesejarahan = '';
        }

        // Menentukan apakah input harus dinonaktifkan
        $isDisabled = !empty($objekWisata) || !empty($objekKesejarahan) || !empty($urgensiObjekKesejarahan) || !empty($urgensiKesejarahan);

        // Form Kelayakan
        $formKelayakanDayaTarik = FormKelayakan::where('email', $user)->where('aspect','Daya Tarik')->get();
        $formKelayakanAksesbilitas = FormKelayakan::where('email', $user)->where('aspect','Aksesbilitas')->get();
        $formKelayakanSaranaDanPrasarana = FormKelayakan::where('email', $user)->where('aspect','Sarana dan Prasarana')->get();
        $formKelayakanPartisipasiMasyarakat = FormKelayakan::where('email', $user)->where('aspect','Partisipasi Masyarakat')->get();

        if(!$formKelayakanDayaTarik->isEmpty()){
            $statusFormKelayakan = "Selesai";

        // Menentukan apakah input harus dinonaktifkan
        $isDisabledForm = True;
             // 1-1
        $formKelayakanDayaTarik1_1_score = $formKelayakanDayaTarik[0]->score;
        $formKelayakanDayaTarik1_1_reason = $formKelayakanDayaTarik[0]->reason;

        // 1-2
        $formKelayakanDayaTarik1_2_score = $formKelayakanDayaTarik[1]->score;
        $formKelayakanDayaTarik1_2_reason = $formKelayakanDayaTarik[1]->reason;

        // 1-3
        $formKelayakanDayaTarik1_3_score = $formKelayakanDayaTarik[2]->score;
        $formKelayakanDayaTarik1_3_reason = $formKelayakanDayaTarik[2]->reason;

        // 1-4
        $formKelayakanDayaTarik1_4_score = $formKelayakanDayaTarik[3]->score;
        $formKelayakanDayaTarik1_4_reason = $formKelayakanDayaTarik[3]->reason;

        // 2-1
        $formKelayakanAksesbilitas2_1_score = $formKelayakanAksesbilitas[0]->score;
        $formKelayakanAksesbilitas2_1_reason = $formKelayakanAksesbilitas[0]->reason;

        // 2-2
        $formKelayakanAksesbilitas2_2_score = $formKelayakanAksesbilitas[1]->score;
        $formKelayakanAksesbilitas2_2_reason = $formKelayakanAksesbilitas[1]->reason;

        // 2-3
        $formKelayakanAksesbilitas2_3_score = $formKelayakanAksesbilitas[2]->score;
        $formKelayakanAksesbilitas2_3_reason = $formKelayakanAksesbilitas[2]->reason;

        // 3-1
        $formKelayakanSaranaDanPrasarana3_1_score = $formKelayakanSaranaDanPrasarana[0]->score;
        $formKelayakanSaranaDanPrasarana3_1_reason = $formKelayakanSaranaDanPrasarana[0]->reason;

        // 3-2
        $formKelayakanSaranaDanPrasarana3_2_score = $formKelayakanSaranaDanPrasarana[1]->score;
        $formKelayakanSaranaDanPrasarana3_2_reason = $formKelayakanSaranaDanPrasarana[1]->reason;

        // 3-3
        $formKelayakanSaranaDanPrasarana3_3_score = $formKelayakanSaranaDanPrasarana[2]->score;
        $formKelayakanSaranaDanPrasarana3_3_reason = $formKelayakanSaranaDanPrasarana[2]->reason;

        // 3-4
        $formKelayakanSaranaDanPrasarana3_4_score = $formKelayakanSaranaDanPrasarana[3]->score;
        $formKelayakanSaranaDanPrasarana3_4_reason = $formKelayakanSaranaDanPrasarana[3]->reason;

        // 4-1
        $formKelayakanPartisipasiMasyarakat4_1_score = $formKelayakanPartisipasiMasyarakat[0]->score;
        $formKelayakanPartisipasiMasyarakat4_1_reason = $formKelayakanPartisipasiMasyarakat[0]->reason;

        // 4-2
        $formKelayakanPartisipasiMasyarakat4_2_score = $formKelayakanPartisipasiMasyarakat[1]->score;
        $formKelayakanPartisipasiMasyarakat4_2_reason = $formKelayakanPartisipasiMasyarakat[1]->reason;

        // 4-3
        $formKelayakanPartisipasiMasyarakat4_3_score = $formKelayakanPartisipasiMasyarakat[2]->score;
        $formKelayakanPartisipasiMasyarakat4_3_reason = $formKelayakanPartisipasiMasyarakat[2]->reason;

        // 4-4
        $formKelayakanPartisipasiMasyarakat4_4_score = $formKelayakanPartisipasiMasyarakat[3]->score;
        $formKelayakanPartisipasiMasyarakat4_4_reason = $formKelayakanPartisipasiMasyarakat[3]->reason;

        // 4-5
        $formKelayakanPartisipasiMasyarakat4_5_score = $formKelayakanPartisipasiMasyarakat[4]->score;
        $formKelayakanPartisipasiMasyarakat4_5_reason = $formKelayakanPartisipasiMasyarakat[4]->reason;

        // 4-6
        $formKelayakanPartisipasiMasyarakat4_6_score = $formKelayakanPartisipasiMasyarakat[5]->score;
        $formKelayakanPartisipasiMasyarakat4_6_reason = $formKelayakanPartisipasiMasyarakat[5]->reason;

        // 4-7
        $formKelayakanPartisipasiMasyarakat4_7_score = $formKelayakanPartisipasiMasyarakat[6]->score;
        $formKelayakanPartisipasiMasyarakat4_7_reason = $formKelayakanPartisipasiMasyarakat[6]->reason;
        }else{

            $statusFormKelayakan = "Belum dikerjakan";
            // Menentukan apakah input harus dinonaktifkan
        $isDisabledForm = False;
            // 1-1
        $formKelayakanDayaTarik1_1_score = "";
        $formKelayakanDayaTarik1_1_reason = "";

        // 1-2
        $formKelayakanDayaTarik1_2_score = "";
        $formKelayakanDayaTarik1_2_reason = "";

        // 1-3
        $formKelayakanDayaTarik1_3_score = "";
        $formKelayakanDayaTarik1_3_reason = "";

        // 1-4
        $formKelayakanDayaTarik1_4_score = "";
        $formKelayakanDayaTarik1_4_reason = "";

        // 2-1
        $formKelayakanAksesbilitas2_1_score = "";
        $formKelayakanAksesbilitas2_1_reason = "";

        // 2-2
        $formKelayakanAksesbilitas2_2_score = "";
        $formKelayakanAksesbilitas2_2_reason = "";

        // 2-3
        $formKelayakanAksesbilitas2_3_score = "";
        $formKelayakanAksesbilitas2_3_reason = "";

        // 3-1
        $formKelayakanSaranaDanPrasarana3_1_score = "";
        $formKelayakanSaranaDanPrasarana3_1_reason = "";

        // 3-2
        $formKelayakanSaranaDanPrasarana3_2_score = "";
        $formKelayakanSaranaDanPrasarana3_2_reason = "";

        // 3-3
        $formKelayakanSaranaDanPrasarana3_3_score = "";
        $formKelayakanSaranaDanPrasarana3_3_reason = "";

        // 3-4
        $formKelayakanSaranaDanPrasarana3_4_score = "";
        $formKelayakanSaranaDanPrasarana3_4_reason = "";

        // 4-1
        $formKelayakanPartisipasiMasyarakat4_1_score = "";
        $formKelayakanPartisipasiMasyarakat4_1_reason = "";

        // 4-2
        $formKelayakanPartisipasiMasyarakat4_2_score = "";
        $formKelayakanPartisipasiMasyarakat4_2_reason = "";

        // 4-3
        $formKelayakanPartisipasiMasyarakat4_3_score = "";
        $formKelayakanPartisipasiMasyarakat4_3_reason = "";

        // 4-4
        $formKelayakanPartisipasiMasyarakat4_4_score = "";
        $formKelayakanPartisipasiMasyarakat4_4_reason = "";

        // 4-5
        $formKelayakanPartisipasiMasyarakat4_5_score = "";
        $formKelayakanPartisipasiMasyarakat4_5_reason = "";

        // 4-6
        $formKelayakanPartisipasiMasyarakat4_6_score = "";
        $formKelayakanPartisipasiMasyarakat4_6_reason = "";

        // 4-7
        $formKelayakanPartisipasiMasyarakat4_7_score = "";
        $formKelayakanPartisipasiMasyarakat4_7_reason = "";
        }

        

        
        return view('content-B.analisisIndividu', compact('activeMenu','prevUrl','nextUrl','user','objekWisata','objekKesejarahan','urgensiObjekKesejarahan','urgensiKesejarahan', 'isDisabled','isDisabledForm', 

        'statusJawabanIndividu', 'statusFormKelayakan',
        
        'formKelayakanDayaTarik1_1_score',
        'formKelayakanDayaTarik1_1_reason',

        'formKelayakanDayaTarik1_2_score',
        'formKelayakanDayaTarik1_2_reason',

        'formKelayakanDayaTarik1_3_score',
        'formKelayakanDayaTarik1_3_reason',

        'formKelayakanDayaTarik1_4_score',
        'formKelayakanDayaTarik1_4_reason',

        'formKelayakanAksesbilitas2_1_score',
        'formKelayakanAksesbilitas2_1_reason',

        'formKelayakanAksesbilitas2_2_score',
        'formKelayakanAksesbilitas2_2_reason',

        'formKelayakanAksesbilitas2_3_reason',
        'formKelayakanAksesbilitas2_3_score',

        'formKelayakanSaranaDanPrasarana3_1_reason',
        'formKelayakanSaranaDanPrasarana3_1_score',

        'formKelayakanSaranaDanPrasarana3_2_reason',
        'formKelayakanSaranaDanPrasarana3_2_score',

        'formKelayakanSaranaDanPrasarana3_3_reason',
        'formKelayakanSaranaDanPrasarana3_3_score',

        'formKelayakanSaranaDanPrasarana3_4_reason',
        'formKelayakanSaranaDanPrasarana3_4_score',

        'formKelayakanPartisipasiMasyarakat4_1_reason',
        'formKelayakanPartisipasiMasyarakat4_1_score',

        'formKelayakanPartisipasiMasyarakat4_2_reason',
        'formKelayakanPartisipasiMasyarakat4_2_score',

        'formKelayakanPartisipasiMasyarakat4_3_reason',
        'formKelayakanPartisipasiMasyarakat4_3_score',

        'formKelayakanPartisipasiMasyarakat4_4_reason',
        'formKelayakanPartisipasiMasyarakat4_4_score',

        'formKelayakanPartisipasiMasyarakat4_5_reason',
        'formKelayakanPartisipasiMasyarakat4_5_score',

        'formKelayakanPartisipasiMasyarakat4_6_reason',
        'formKelayakanPartisipasiMasyarakat4_6_score',

        'formKelayakanPartisipasiMasyarakat4_7_reason',
        'formKelayakanPartisipasiMasyarakat4_7_score',
    ));
    }

    public function kegiatanPembelajaran3()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Analisi-Individu"; 
        $nextUrl = "/Kesejarahan/Post-Test";
        $activeMenu = 'menu2';
        $uploadedFile = \DB::table('upload_file_tugas')
            ->where('kategori', 'kegiatan pembelajaran 3')
            ->where('created_by', $user)
            ->first();
        return view('content-B.kegiatanPembelajaran3', compact('activeMenu','prevUrl','nextUrl','user','uploadedFile'));
    }

    public function postTest()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Kegiatan-Pembelajaran-3"; 
        $nextUrl = "/Kesejarahan/Refleksi";
        $activeMenu = 'menu2';

        $batas_test = Nilai::where('email', $user)
            ->where('aspek', 'post_test_kesejarahan')
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

        return view('content-B.postTest', compact('activeMenu','prevUrl','nextUrl','user','batas_test_value','skor_test_value'));
    }

    public function refleksi()
    {
        $user = Auth::user()->email;
        $prevUrl = "/Kesejarahan/Post-Test"; 
        $nextUrl = "/KWU-dan-Kepariwisataan/Pre-Test";
        $activeMenu = 'menu2';

        // Ambil jawaban refleksi dan pastikan jika tidak ada data, tetap hasilkan collection
        $jawabanRefleksi = Refleksi::where('created_by', $user)
        ->get()
        ->groupBy('kategori')
        ->map(function ($items) {
            return $items->keyBy('aspek');
        });

        // dd($jawabanRefleksi);

        // Pastikan jawabanRefleksi bukan null dan set sebagai collection jika kosong
        if (!$jawabanRefleksi || $jawabanRefleksi->isEmpty()) {
            $jawabanRefleksi = collect();
        }

        // dd($jawabanRefleksi);

        return view('content-B.refleksi', compact('activeMenu','prevUrl','nextUrl','user', 'jawabanRefleksi'));
    }
}
