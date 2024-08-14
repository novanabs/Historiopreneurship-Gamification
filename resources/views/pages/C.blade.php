@extends('layouts.main')

@section('container')

{{-- Status Bar --}}
<div class="progress rounded" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0"
    aria-valuemax="100">
    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 0.001%"
        id="status_bar"></div>
</div>
<div id="halaman_saat_ini">{{ session('active_menu_sub') }}</div>


<div class="mt-3">
    <div class="row">
        <div class="col">
            <h2>C. Kewirausahaan dan Kepariwisataan </h2>
        </div>
        {{-- Tombol Navigasi --}}
        <div class="row mb-3 mt-3">
            <div class="col-6">
                <button class="btn btn-primary" onclick="prev()" id="prev">Sebelumnya</button>
            </div>
            <div class="col-6 text-end">
                <button class="btn btn-primary" onclick="next()" id="next">Selanjutnya</button>
            </div>
        </div>
    </div>
    <div class="materi-c" id="kewirausahaan-dan-kepariwisataan">
        <div class="row">
            <div class="col">

                <h3>Kewirausahaan dan Kepariwisataan</h3>
                <p class="text-sm">14 JP x @ 50 menit = 700 menit
                </p>
                <p>
                    <b>CPMK:</b>
                </p>
                <ol>
                    <li>Mahasiswa mampu menguraikan perspektif terkait pemasaran kewirausahaan
                        kesejarahan melalui diskusi kelompok dan pakar.
                    </li>
                    <li>Mahasiswa mampu merancang produk dan jasa terkait kewirausahaan kesejarahan
                        berdasarkan konsep kewirausahaan.
                    </li>
                    <li>
                        Mahasiswa memiliki keterampilan memasarkan produk dan jasa terkait kewirausahaan
                        kesejarahan berdasarkan hasil praktik
                        lapangan.
                    </li>
                </ol>
                <p class="kotak">
                    <b>PERTANYAAN PEMANTIK</b> <br>
                    Adakah di antara kalian
                    yang pernah berbelanja
                    online? Berapa rata-rata
                    pengeluaran per bulan
                    jika berbelanja online?
                    <br> <b>Tips untuk dosen:</b> <br>Dalam melakukan
                    pembelajaran ini, dosen
                    dapat menayangkan sebuah
                    video tentang pemasaran
                    yang menggunakan
                    teknologi, misal pemasaran
                    pada Amazon.com, Alibaba,
                    Lazada, shopee, Tokopedia,
                    bukalapak, dan lain-lain.
                </p>
                <p>
                    Secara etimologi, kewirausahaan
                    berasal dari kata wira dan usaha. Wira berarti
                    peluang, pahlawan, manusia unggul, teladan,
                    berbudi luhur, gagah berani, dan berwatak
                    agung. Sedangkan menurut Kamus Besar
                    Bahasa Indonesia, wirausaha adalah orang
                    yang pandai atau berbakat mengenali produk
                    baru, menentukan cara produksi baru,
                    menyusun operasi untuk mengadakan produk
                    baru, mengatur permodalan operasinya, serta
                    memasarkannya (Rusdiana, 2014).

                </p>
                <p>
                    Wirausaha adalah orang yang
                    mendirikan, mengelola, mengembangkan dan
                    melembagakan perusahaan miliknya atau
                    kemampuan yang dimiliki oleh seseorang untuk
                    melihat dan menilai kesempatan-kesempatan
                    bisnis, mengumpulkan sumber daya- sumber
                    daya yang dibutuhkan untuk mengambil
                    tindakan yang tepat dan mengmbil keuntungn
                    dalam rangka meraih sukses (Sukamdani, 2013). Menurut Zimmerer dan Scrbrough, wirausahawan adalah
                    orang yang
                    menciptakan bisnis baru dengan mengambil risiko dan ketidakpastian demi
                    mencapai keuntungan dan pertumbuhan dengan cara mengidentifikasi peluang dan
                    menggabungkan sumber daya yang diperlukan (Fahmi, 2014).
                </p>
                <p>
                    Kewirausahaan adalah suatu ilmu yang mengkaji tentang pengembangan
                    dan pembangunan semangat kreatifitas serta berani menanggung risiko terhadap
                    pekerjaan yang dilakukan demi mewujudkan hasil karya tersebut (Fahmi, 2014).
                    Keberanian mengambil risiko sudah menjadi milik seorang wirausahawan karena
                    dituntut untuk berani dan siap jika usaha yang dilakukan tersebut belum mmeiliki
                    nilai perhatian dipasar. Peran dari seorang wirausaha menurut Suryana memiliki
                    dua peran yaitu sebagai penemu dan sebagai perencana. Sebagai penemu
                    wirausaha menemukan dan menciptakan produk baru, teknologi dan cara baru, ideide

                    baru dan organisasi usaha baru. Sebagai perencana, wirausaha berperan
                    merancang usaha baru, merencakan strategi perusahaan baru, merencakan ideide dan
                    peluang
                    dalam
                    perusahaan.

                </p>
                <p>
                    Peter F. Drucker menjelaskan konsep kewirausahaan merujuk pada sifat,
                    watak, dan ciri-ciri yang melekat pada seseorang yang mempunyai kemauan keras
                    untuk mewujudkan gagasan inovatif ke dalam dunia usaha yang nyata dan dapat
                    mengembangkannya dengan tangguh. Dan menurut Zimmerer kewirausahaan
                    adalah penerapan kreativitas dan inovasi untuk memecahkan masalah dan upaya
                    memanfaatkan peluang yang dihadapi setiap hari.
                </p>
                <p>
                    Kewirausahaan merupakan gabungan dari kreativitas, inovasi dan
                    keberanian menghadapi resiko yang dilakukan dengan cara kerja keras untuk
                    membentuk dan memelihara usaha baru (Suryana, 2014). Nilai-nilai hakiki
                    kewirausahaan menurut Suryana (2014) yaitu:

                </p>
                <ol type="a">
                    <li>Percaya diri <br>
                        Merupakan suatu paduan sikap dan kenyakinan seseorang dalam
                        menghadapi tugas atau pekerjaan. Kepercayaan diri merupakan landasan
                        yang kuat untuk meningkatkan karsa dan karya seseorang. Orang yang
                        percaya diri memiliki kemampuan untuk menyelesaikan pekerjaan dengan
                        sistematis, berencana, efektif, dan efisien. Seperti percaya diri dalam
                        menentukan sesuatu, percaya diri dalam menjalankan sesuatu, percaya diri
                        bahwa kita dapat mengatasi berbagai risiko yang dihadapi merupakan
                        faktor yang mendasar yang harus dimiliki oleh wirausaha. Seseorang yang
                        memiliki jiwa wirausaha merasa yakin bahwa apa-apa yang diperbuatnya
                        akan berhasil walaupun akan menghadapi berbagai rintangan. Tidak selalu dihantui rasa takut akan
                        kegagalan sehingga membuat dirinya optimis untuk
                        terus maju. </li>
                    <li>Kepemimpinan <br>
                        Sifat kepemimpinan memang ada dalam diri masing- masing individu dan
                        sifat tersebut juga harus melekat pada diri wirausahawan. Wirausahawan
                        adalah seseorang yang akan memimpin jalannya sebuah usaha,
                        wirausahawan harus bisa memimpin pekerjaannya karena kepemimpinan
                        merupakan faktor kunci menjadi wirausahawan sukses.
                    </li>
                    <li>Berorientasi ke masa depan <br>
                        Orang yang berorientasi ke masa depan adalah orang yang memiliki
                        perspektif dan pandangan ke masa depan. Meskipun terdapat resiko yang
                        mungkin terjadi, ia tetap tabah untuk mencari peluang dan tantangan demi
                        pembaharuan masa depan. Pandangan yang jauh ke depan membuat
                        wirausahawan tidak cepat puas dengan karsa dan karya yang sudah ada
                        saat ini.
                    </li>
                    <li>
                        Berani mengambil resiko <br>
                        Kemauan dan kemampuan untuk menghadapi risiko merupakan salah satu
                        nilai utama dalam kewirausahaan. wirausahawan yang tidak mau
                        menghadapi risiko akan sukar memulai atau berinisiatif. Menurut Angelita
                        S. Bajaro, seorang wirausahawan yang berani menanggung resiko adalah
                        orang yang selalu ingin jadi pemenang dan memenangkan dengan cara
                        yang baik.
                    </li>
                    <li>Keorisinalitas (kreativitas dan inovasi)
                        <br> Kreativitas adalah kemampuan untuk berpikir yang baru dan berbeda,
                        sedangkan inovasi adalah kemampuan untuk bertindak yang baru dan
                        berbeda. Menurut Hardvards Theodore Levitt menjelaskan inovasi dan
                        kreativitas lebih mengarah pada konsep berpikir dan bertindak yang baru.
                        Kreatifitas adalah kemampuan menciptakan gagasan dan menemukan cara
                        baru dalam melihat permasalahan dan peluang yang ada. Sementara
                        inovasi adalah kemampuan mengaplikasikan solusi yang kreatif terhadap
                        permasalahan dan peluang yang ada untuk lebih memakmurkan kehidupan
                        masyarakat. Jadi, kreativitas adalah kemampuan menciptakan gagasan
                        baru, sedangkan inovasi adalah melakukan sesuatu yang baru.

                    </li>
                    <li>Berorientasi pada tugas dan hasil.
                        <br> Seseorang yang selalu mengutamakan tugas dan hasil adalah orang yang
                        selalu mengutamakan nilai-nilai motif berprestasi, berorientasi pada
                        keberhasilan, ketekunan dan ketabahan, tekad kerja keras, mempunyai
                        dorongan kuat, energik, dan berinisiatif. Berinisiatif artinya selalu ingin
                        mencari dan memulai. Dalam kewirausahaan, peluang hanya diperoleh
                        apabila terdapat inisiatif. Perilaku inisiatif ini biasanya diperoleh melalui
                        pelatihan dan pengalaman selama bertahun-tahun, dan pengembangannya
                        diperoleh dengan cara disiplin diri, berpikir kritis, tanggap dan semangat
                        berprestasi (Suryana, 2014).
                        <br> Wirausaha berbasis sejarah penting untuk dikembangkan karena telah
                        dibuktikan oleh beberapa orang jika dengan mengembangkan wirausaha
                        berbasis sejarah seseorang dapat meraih kesuksesan (Mursal dkk, 2022).
                        Seorang wirausaha berbasis sejarah adalah seseorang yang dapat menjual
                        produk berdasarkan penelitian sejarah dan memiliki jiwa kewirausahaan.
                    </li>
                </ol>
            </div>
        </div>

    </div>
    <div class="materi-c" id="lembar-analisa-kelompok-1">


        <div class="row">
            <div class="col">
                <h2>Lembar Analisis Kelompok</h2>
                <p class="text-lg">AKTIVITAS 1</p>
                <p class="text-sm">1 JP x @ 50 menit = 50 menit</p>
                <p class="mt-2 text-lg">DESKRIPSIKANLAH PERSPEKTIF KALIAN TERHADAP PERMASALAHAN
                    BERIKUT!
                </p>
                <p>Perkembangan teknologi semakin hari semakin bertambah canggih. Dengan
                    ditemukannya berbagai macam jenis software atau aplikasi serta pemrograman internet,
                    membawa pengaruh yang sangat besar terhadap isu perdagangan dan pemasaran dari
                    strategi offline ke startegi berbasis online. Pemasaran Online atau bisa disebut juga dengan
                    Digital Marketing merupakan teknik pemasaran terkini dengan menggunakan internet sebagai
                    sumber utamanya. Selain bisa menjangkau ke seluruh dunia, pemasaran online bisa dilakukan
                    hanya di depan komputer dan tentunya memerlukan strategi-strategi terstentu untuk bisa
                    menyukseskan proses pemasarannya.
                </p>
                <p>Strategi-startegi yang bisa dilakukan dalam pemasaran berbasis online dapat
                    menggunakan berbagai macam software, aplikasi atau program, baik yang disedikan secara
                    organik (gratis) maupun anorganik (berbayar). Saat ini tersedia berbagai macam platform
                    aplikasi yang dapat digunakan sebagai media atau tools untuk meningkatkan strategi
                    pemasaran, diantaranya SEO, SEM, Social media marketing (Facebook, Instagram,
                    whatsapp, twitter, dan lain-lain), PPC, dan Afiliate marketing. </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h3 class="text-center">PENGALAMAN BERBELANJA PADA SITUS e-COMMERCE</h3>
                <ol>
                    <li class="mt-3"><label for="">Pengalaman yang didapat:</label> <br> <textarea name="" id=""
                            rows="5"></textarea></li>
                    <li class="mt-3"><label for="">Kelebihan berbelanja melalu situs <i>e-commerce</i></label> <br>
                        <textarea name="" id="" rows="5"></textarea></li>
                    <li class="mt-3"><label for="">Kekurangan belanja melalui situs <i>e-commerce</i></label> <br>
                        <textarea name="" id="" rows="5"></textarea></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="materi-c" id="lembar-analisa-kelompok-2">


        <div class="row">
            <div class="col">
                <h3>LEMBAR ANALISA KELOMPOK</h3>
                <p class="text-lg">AKTIVITAS 2</p>
                <p class="text-sm">1 JP x @ 50 menit = 50 menit</p>
                <p class="mt-2 text-lg">LAKUKAN ANALISA TERHADAP PERMASALAHAN BERIKUT!</p>

                <label for="" class="mt-4">Jenis-jenis teknologi yang berpengaruh terhadap dunia pemasaran produkproduk
                    yang berkaitan dengan kewirausahaan kesejarahan:
                </label> <br> <textarea name="" id="" rows="5"></textarea>
                <label for="" class="mt-4">Bagaimana pengaruh teknologi tersebut terhadap proses pemasaran kewirausahaan
                    kesejarahan: </label> <br> <textarea name="" id="" rows="5"></textarea>
                <label for="" class="mt-4">Kelebihan dan kekurangan penggunaan teknologi dalam proses pemasaran
                    kewirausahaan kesejarahan:</label> <br> <textarea name="" id="" rows="5"></textarea>
                <label for="" class="mt-4">Analisislah kondisi proses pemasaran sebelum dan sesudah ditemukannya
                    teknologi khususnya platform pemasaran digital: </label> <br> <textarea name="" id=""
                    rows="5"></textarea>

            </div>
        </div>
    </div>

    <div class="materi-c" id="lembar-diskusi-kelompok">


        <div class="row">
            <div class="col">
                <h3>LEMBAR DISKUSI KELOMPOK</h3>
                <p class="text-lg">AKTIVITAS 3</p>
                <p class="text-sm">2 JP x @ 50 menit = 100 menit</p>
                <p class="mt-2">Berdasarkan materi yang disampaikan oleh pakar, diskusikanlah materi tersebut
                    dengan menguraikan perspektif kalian dalam bentuk ringkasan dan peta konsep
                    terkait pemasaran kewirausahaan kesejarahan!
                </p>
                <p><b>RINGKASAN DAN PETA KONSEP PEMASARAN KEWIRAUSAHAAN KESEJARAHAN </b></p>

                <label for="" class="mt-4">Hasil analisa kelompok :
                </label> <br> <textarea name="" id="" rows="5"></textarea>

            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h3>RUBRIK HASIL ANALISA</h3>
                <ol>
                    <li><b>KATEGORI 1</b><br>Jika hasil analisa mengambarkan
                        jawaban yang tidak lengkap, tidak
                        terstruktur dan tidak tepat sasaran </li>
                    <li class="mt-3"><b>KATEGORI 2</b><br>Jika hasil analisa mengambarkan
                        jawaban yang cukup lengkap, cukup
                        terstruktur dan cukup tepat sasaran </li>
                    <li class="mt-3"><b>KATEGORI 3</b><br>Jika hasil analisa mengambarkan
                        jawaban yang lengkap, terstruktur dan
                        tepat sasaran </li>
                    <li class="mt-3"><b>KATEGORI 4</b><br>Jika hasil analisa mengambarkan
                        jawaban yang sangat lengkap, sangat
                        terstruktur dan sangat tepat sasaran </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="materi-c" id="lembar-proyek-individu">



        <div class="row">
            <div class="col">
                <h3>LEMBAR PROYEK INDIVIDU</h3>
                <p class="text-lg">AKTIVITAS 4</p>
                <p class="text-sm">4 JP x @ 50 menit = 200 menit </p>

                <p class="mt-4"><b>MERANCANG PRODUK DAN JASA TERKAIT KEWIRAUSAHAAN KESEJARAHAN BERDASARKAN KONSEP
                        KEWIRAUSAHAAN </b></p>
                <p>Wirausahawan merupakan seorang individu yang memiliki semangat,
                    kemampuan, dan pikiran untuk menaklukkan cara berpikir yang lambat dan
                    malas. Seorang wirausahawan adalah seorang inovator yang memiliki naluri
                    untuk melihat peluang yang ada. Seorang wirausahawan akan mencari
                    kombinasi baru yang menggabungkan lima hal: barang dan jasa baru, teknik
                    produksi baru, sumber bahan baku baru, pasar baru, dan organisasi industri
                    baru. Sementara itu, orang-orang yang mampu melihat ke depan, berpikir
                    rasional, dan menemukan solusi atas berbagai masalah akan menjadi seorang wirausahawan yang sukses
                    (Ratumbusyang, 2017)
                </p>
                <p>Untuk menjadi wirausahawan yang sukses, mahasiswa harus mampu
                    membuka peluang bisnis, tanggap terhadap orang lain dan menjalin hubungan
                    antar wirausaha. Sebagai upaya menekan angka pengangguran, perlu
                    diciptakan peluang-peluang usaha baru, salah satunya di bidang
                    kewirausahaan kesejarahan.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="kotak bg-warning-subtle">
                    Pada aktivitas ini, kalian membuat business plan produk dan jasa terkait
                    kewirausahaan kesejarahan. Kalian diminta untuk bekerja sambil belajar secara
                    individu untuk membuat business plan tersebut.
                    Kalian bebas menyusun, merancang dan mengatur proyek yang kalian kerjakan.
                </div>
                <p class="mt-4 text-center text-lg"><b>Hal yang akan kalian lakukan: </b></p>
                <ol class="mt-3">
                    <li>Pelajari buku ajar dengan seksama;</li>
                    <li>Pada bagian penentuan proyek, kalian akan menentukan proyek yang sesuai dengan isi wacana;</li>
                    <li>Pada bagian perancangan proyek, kalian menyusun Langkah-langkah untuk menyelesaikan proyek;</li>
                    <li>Pada bagian penyusunan jadwal proyek, kalian harus Menyusun jadwal untuk memperkirakan awal
                        pelaksanaan hingga selesai;</li>
                    <li>Pada bagian penyelesaian proyek dan monitoring dosen, kalian mengisi form monitoring
                        keterlaksanaan jadwal penyelesaian proyek yang sebelumnya telah disepakati;</li>
                    <li>Pada bagian penyusunan dan presentasi proyek, kalian mempresentasikan proyek yang telah dibuat.
                    </li>
                    <li>Pada bagian evaluasi proses dan hasil proyek, kalian menjawab pertanyaan pada kolom yang telah
                        disediakan mengenai proyek yang telah dikerjakan.</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-lg">LENGKAPILAH KOLOM DI BAWAH INI!</p>
                <p class="text-center"><b>Rancangan/Desain Proyek</b></p>
                <p>Rancangan produk dan jasa yang dibuat harus berkaitan dengan kewirausahaan
                    kesejarahan, boleh berupa produk, boleh berupa jasa, yang berpeluang dipasarkan di
                    Kawasan sekitar wisata sejarah di daerah kalian.</p>
                <label for="" class="mt-3">Produk/Jasa yang akan dirancang</label>
                <textarea name="" id="" rows="5"></textarea>
                <label for="" class="mt-3">Analisa produk/jasa yang digunakan:</label>
                <textarea name="" id="" rows="5"></textarea>
                <hr>
                <p class="text-center"><b>Perencanaan Proyek</b></p>
                <p>Tuliskan Langkah kerja untuk merancang proyek dan jasa, dimulai dari membuat
                    business plan.
                </p>
                <label for="" class="mt-3">Langkah kerja:</label>
                <textarea name="" id="" rows="5"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-lg text-center mt-4"><b>Penyusunan Jadwal Pelaksanaan Proyek</b></p>
                <p>Susunlah jadwal penyelesaian proyek tersebut. Setelah itu tunjukkan pada dosen kalian agar diberikan
                    persetujuan pembuatan proyek tersebut. </p>
                <p class="text-center"><i>=== Tabel Rincian Jadwal Kegiatan Proyek ===</i></p>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Rincian Kegiatan</td>
                            <td>Keterangan</td>
                            <td>Waktu Pelaksanaan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-lg text-center mt-4"><b>Penyelesaian Proyek dan Monitoring</b></p>
                <p>Setelah jadwal disusun dan disetujui, selanjutnya yaitu mengisi form monitoring proyek berikut.</p>
                <p class="mt-3 text-center">
                    <i>Daftar Checklist Monitoring Proyek</i>
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <td rowspan="2">No</td>
                            <td rowspan="2">Jenis Kegiatan</td>
                            <td colspan="2">Keterangan</td>
                        </tr>
                        <tr>
                            <td>Sudah</td>
                            <td>Sudah</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><b>Persiapan</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Masing-masing anggota kelompok mendapat tugas sesuai bagiannya</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Membuat rencana penyelesaian proyek</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Membuat jadwal penyelesaian proyek</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Menuliskan alat dan bahan yang digunakan</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Menuliskan cara kerja yang akan dilaksanakn</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><b>Pelaksanaan</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pembagian tugas secara merata kepada anggota kelompok</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Proyek terlaksana sesuai dengan rencana yang dibuat</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Proyek selesai sesuai jadwal yang telah dirancang</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><b>Presentasi</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Peralatan presentasi</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Produk memiliki nilai jual atau manfaat</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-center text-lg mt-3">
                    <b>Penyusunan dan Presentasi Proyek</b>
                </p>
                <p class="text-center">Sekarang tugas kalian adalah mempresentasikan proyek yang telah kalian buat</p>

                <p class="text-center text-lg mt-3">
                    <b>Evaluasi Proses dan Hasil Proyek</b>
                </p>

                <ol>
                    <li class="mt-3"><label for="">Bagaimana pendapat kalian tentang hasil proyek yang telah kalian
                            buat</label> <br> <textarea name="" id="" rows="5"></textarea></li>
                    <li class="mt-3"><label for="">Apa yang bisa Anda lakukan agar proyek Anda menjadi lebih baik atau
                            lebih sempurna</label> <br> <textarea name="" id="" rows="5"></textarea></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-lg">
                    <b>Belajar Karakter Berwirausaha</b>
                </p>

                <p><b>Persiapan</b></p>
                <ol>
                    <li>Mahasiswa menentukan topik berwirausaha yang berkarakter dan
                        dampak dari COVID 19 di berbagai sektor yang berhubungan dengan
                        ekonomi.</li>
                    <li>Mempersiapan tempat dan sound system oleh panitia.</li>
                    <li>Mempersiapkan 2 narasumber tokoh wirausahawan lokal untuk
                        berbagi mengenai Wirausaha Yang Bertanggung JawabPokok materi
                        yang disampaikan adalah :
                        <ol type="a">
                            <li>Pengalaman mulai berwiraswasta.</li>
                            <li>Alasan kenapa memilih bisnis tersebut.</li>
                            <li>Bagaimana permasalahan dan peluang yang timbul dari bisnis
                                tersebut.</li>
                            <li>Karakter Wirausahawan.</li>
                            <li>Dampak COVID 19 terhadap perekonomian</li>
                            <li>Motivasi peserta didik</li>
                        </ol>
                    </li>
                </ol>
                <p><b>Pelaksanaan</b></p>
                <ol>
                    <li>Mahasiswa membuat dokumen jurnal belajar.</li>
                    <li>Mahasiswa memfasilitasi sebagai Moderator dan Pewara Acara.</li>
                    <li>Peserta didik mendengarkan dan secara aktif didorong untuk aktif
                        menggali informasi dari narasumber.</li>
                    <li>Peserta didik diberikan tugas dengan mencatat rangkuman informasi
                        yang telah disampaikan narasumber selama acara berlangsung.</li>
                    <li>Peserta didik diberikan tugas dengan mencatat rangkuman informasi
                        yang telah disampaikan narasumber selama acara berlangsung.</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-lg"><b>Orasi "Jika Aku Menjadi?"</b></p>
                <p><b>Deskripsi</b></p>
                <p>Seorang wirausahawan harus memiliki karakter yang visioner. Dalam
                    menumbuhkan karakter tersebut, peserta didik diberikan kesempatannya
                    untuk menyusun visi dan misinya ketika berkeinginan menjadi seorang
                    pengusaha. Dengan diberikan tenggat waktu, peserta didik dituntut untuk
                    menuangkan visi dan misinya secara spontan sehingga diharapkan peserta
                    didik berani mengutarakan visi dan misinya serta memahami salah satu
                    karakter wirausahawan.
                </p>
                <p><b>Persiapan</b></p>
                <ol>
                    <li>Peserta didik diminta mempersiapkan alat tulis dan secarik kertas.
                    </li>
                    <li>Mahasiswa mempersiapkan pertanyaan yang harus dijawab oleh rekan
                        lainnya:
                        <ol type="a">
                            <li>Jika kamu memiliki modal dan menjadi seorang wirausahawan, kamu
                                ingin menjadi pengusaha apa?
                            </li>
                            <li>Kalau kamu sudah menentukan menjadi pengusaha apa, maka apa visi
                                dan misimu menjadi seorang pengusaha? </li>
                        </ol>
                    </li>

                </ol>
                <p><b>Pelaksanaan</b></p>
                <ol>
                    <li>Peserta didik diberikan pertanyaan yang telah disiapkan.</li>
                    <li>Peserta diminta menjawab pertanyaan tersebut di secarik kertas dengan
                        tenggat waktu 15 menit.</li>
                    <li>Meminta audien maju ke depan berorasi tentang visi dan misinya ketika
                        menjadi wirausahawan.</li>
                    <li>Memberikan refleksi singkat dan mengijikan teman-temannya untuk
                        bertanya.</li>
                    <li>Peserta didik diajak untuk meneriakkan “Aku ingin menjadi Pengusaha
                        ............. Aku pasti sukses!” Secara bersamaan.</li>
                </ol>
                <p>Hasil karya dan Cara Berorasi di depan umum pada kegiatan ini bukan
                    menjadi pokok pembelajaran, namun memperlihatkan kecepatan, dan
                    kemandiriannya dalam menentukan visi dan misinya sendiri untuk menjadi
                    seorang wirausahawan.</p>
            </div>
        </div>
    </div>
    <div class="materi-c" id="refleksi-1">


        <div class="row">
            <div class="col">
                <h3>REFLEKSI</h3>
                <p>Setelah mempelajari buku ajar ini, bagaimana pemahaman kalian terhadap materi?

                    Isilah penilaian diri ini dengan sejujur-jujurnya dan sebenar-benarnya sesuai dengan
                    perasaan kalian ketika mengerjakan suplemen bahan materi ini! Bubuhkanlah tanda centang
                    (√) pada salah satu gambar yang dapat mewakili perasaan kalian setelah mempelajari materi
                    ini!</p>
                <!-- emoticon -->
                <div class="icon-radio">
                    <label><input type="radio" name="icon" /> <i class="fa-solid fa-face-laugh-beam"></i></label>
                    <label><input type="radio" name="icon" /> <i class="fa-solid fa-face-smile"></i></label>
                    <label><input type="radio" name="icon" /> <i class="fa-solid fa-face-grin-beam-sweat"></i></label>
                    <label><input type="radio" name="icon" /> <i class="fa-solid fa-face-sad-cry"></i></label>
                    <label><input type="radio" name="icon" /> <i class="fa-solid fa-face-dizzy"></i></label>
                </div>
                <p><b>Jawablah pertanyaan berikut!</b></p>
                <ol>
                    <li class="mt-3"><label for="">Apa yang sudah kalian pelajari?</label> <br> <textarea name="" id=""
                            rows="5"></textarea></li>
                    <li class="mt-3"><label for="">Apa yang kalian kuasai dari materi ini?</label> <br> <textarea
                            name="" id="" rows="5"></textarea></li>
                    <li class="mt-3"><label for="">Bagian apa yang belum kalian kuasai?</label> <br> <textarea name=""
                            id="" rows="5"></textarea></li>
                    <li class="mt-3"><label for="">Apa upaya kalian untuk menguasai yang belum kalian kuasai?</label>
                        <br> <textarea name="" id="" rows="5"></textarea></li>
                </ol>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h3>RUBRIK HASIL ANALISA</h3>
                <ol>
                    <li><b>KATEGORI 1</b><br>Jika hasil analisa mengambarkan jawaban
                        yang tidak lengkap, tidak terstruktur dan
                        tidak tepat sasaran </li>
                    <li class="mt-3"><b>KATEGORI 2</b><br>Jika hasil analisa mengambarkan jawaban
                        yang cukup lengkap, cukup terstruktur dan
                        cukup tepat sasaran </li>
                    <li class="mt-3"><b>KATEGORI 3</b><br>Jika hasil analisa mengambarkan jawaban
                        yang lengkap, terstruktur dan tepat sasaran </li>
                    <li class="mt-3"><b>KATEGORI 4</b><br>Jika hasil analisa mengambarkan jawaban
                        yang sangat lengkap, sangat terstruktur dan
                        sangat tepat sasaran </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row materi-c" id="praktik-lapangan-1">
        <div class="col">
            <h3>Praktik Lapangan 1</h3>
            <p class="text-lg">AKTIVITAS 5</p>
            <p class="text-sm">2 JP x @ 50 menit = 100 menit</p>
            <p>Produk dan jasa yang telah kalian rancang, akan disimulasikan pada pertemuan ini.
                Simulasikanlah dengan teman-teman di kelas kalian terlebih dahulu sebelum dipraktikkan ke
                lingkup yang lebih luas. Tulislah saran dari teman-teman di kelas terkait Produk dan jasa
                yang sudah kalian jual kepada mereka.</p>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Silahkan kumpulkan tugas anda!</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
        </div>
    </div>
    <div class="row materi-c" id="praktik-lapangan-2">
        <div class="col">
            <h3>Praktik Lapangan 2</h3>
            <p class="text-lg">AKTIVITAS 6</p>
            <p class="text-sm">2 JP x @ 50 menit = 100 menit</p>
            <p>Pada pertemuan kali ini, saatnya kalian menjual produk dan jasa terkait kewirausahaan
                kesejarahan yang telah kalian rancang kepada lingkup yang lebih luas, seperti masyarakat
                umum, teman di luar kelas/fakultas, teman di luar universitas, pengguna sosial media, dan lainlain.
                Tulislah produk dan yang berhasil kalian jual beserta jumlahnya.
            </p>

            <div class="mb-3">
                <label for="formFile" class="form-label">Silahkan kumpulkan tugas anda!</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <p class="text-lg text-center"><b>Lampiran tabel jumlah produk dan jasa yang terjual</b></p>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <td>No</td>
                        <td>Nama Konsumen</td>
                        <td>Jumlah</td>
                        <td>Keterangan</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row materi-c" id="refleksi-2">
        <div class="col">
            <h3>REFLEKSI</h3>
            <p>Setelah mempelajari buku ajar ini, bagaimana pemahaman kalian terhadap materi?

                Isilah penilaian diri ini dengan sejujur-jujurnya dan sebenar- benarnya sesuai dengan
                perasaan kalian ketika mengerjakan suplemen bahan materi ini! Bubuhkanlah tanda centang
                (√) pada salah satu gambar yang dapat mewakili perasaan kalian setelah mempelajari materi
                ini! </p>
            <!-- emoticon -->
            <div class="icon-radio">
                <label><input type="radio" name="icon" /> <i class="fa-solid fa-face-laugh-beam"></i></label>
                <label><input type="radio" name="icon" /> <i class="fa-solid fa-face-smile"></i></label>
                <label><input type="radio" name="icon" /> <i class="fa-solid fa-face-grin-beam-sweat"></i></label>
                <label><input type="radio" name="icon" /> <i class="fa-solid fa-face-sad-cry"></i></label>
                <label><input type="radio" name="icon" /> <i class="fa-solid fa-face-dizzy"></i></label>
            </div>
            <p><b>Jawablah pertanyaan berikut!</b></p>
            <ol>
                <li class="mt-3"><label for="">Apa yang sudah kalian pelajari?</label> <br> <textarea name="" id=""
                        rows="5"></textarea></li>
                <li class="mt-3"><label for="">Apa yang kalian kuasai dari materi ini?</label> <br> <textarea name=""
                        id="" rows="5"></textarea></li>
                <li class="mt-3"><label for="">Bagian apa yang belum kalian kuasai?</label> <br> <textarea name="" id=""
                        rows="5"></textarea></li>
                <li class="mt-3"><label for="">Apa upaya kalian untuk menguasai yang belum kalian kuasai?</label> <br>
                    <textarea name="" id="" rows="5"></textarea></li>
            </ol>
        </div>
    </div>
</div>

    <script>
        // Mengambil semua class sub
        const materi_a = document.getElementsByClassName('materi-c');

        // Navigasi Soal
        var $sub = 0;
        var $progress = 0;

        console.log(materi_a.length)

        // Hide semua bab
        function hide_semua_sub(){
            for(let i=0;i<=8;i++){
                console.log(materi_a[i])
                materi_a[i].style.display = 'none';
            }
            console.log($sub, $progress)
        }
        hide_semua_sub();

        // Menampilkan sub
        function show_sub($no) {
            materi_a[$no].style.display = 'block';
        }
        show_sub($sub);
        
        // Show Sub by Session
        // const halaman_saat_ini = document.getElementById('halaman_saat_ini').innerHTML;
        // console.log(halaman_saat_ini);
        // document.getElementById(halaman_saat_ini).style.display = 'block'

        // Navigasi tombol
        function nav_tombol(){
            if($sub == 8){
                document.getElementById('next').disabled = true;
            } else if ($sub == 0) {
                document.getElementById('prev').disabled = true;
            } else {
                document.getElementById('prev').disabled = false;
                document.getElementById('next').disabled = false;
            }
        }
        nav_tombol();

        // Status Bar

        const status_bar = document.getElementById('status_bar');
        function update_status(){
            let persen = $progress * 12.5;
            status_bar.style.width = `${persen}%`;
        }

        // Testing
        console.log(materi_a)

        function next() {
            console.log('Selanjutnya', $sub)
            hide_semua_sub();
            $sub++;
            if ($sub > $progress) {
                $progress++;
            }
            show_sub($sub);
            nav_tombol()
            update_status()
            active_sub()
        }

        function prev() {
            console.log('Sebelumnya', $sub)
            hide_semua_sub();
            $sub--;
            show_sub($sub);
            nav_tombol()
            active_sub()
        }

    </script>
    @endsection