@extends('layouts.main')

@section('container-content')

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<form action="{{route('simpanJawabanIndividuKewirausahaan')}}" method="POST">
    @csrf
<h2>Proyek Individu</h2>
<p class="text-lg">AKTIVITAS 4</p>
<p class="text-sm">4 JP x @ 50 menit = 200 menit </p>

<p class="mt-4">
    <b>MERANCANG PRODUK DAN JASA TERKAIT KEWIRAUSAHAAN KESEJARAHAN BERDASARKAN KONSEP
        KEWIRAUSAHAAN</b>
</p>
<p>
    Wirausahawan merupakan seorang individu yang memiliki semangat, kemampuan, dan pikiran untuk menaklukkan cara berpikir yang lambat dan malas. Seorang wirausahawan adalah seorang inovator yang memiliki naluri untuk melihat peluang yang ada. Seorang wirausahawan akan mencari kombinasi baru yang menggabungkan lima hal: barang dan jasa baru, teknik produksi baru, sumber bahan baku baru, pasar baru, dan organisasi industri baru. Sementara itu, orang-orang yang mampu melihat ke depan, berpikir rasional, dan menemukan solusi atas berbagai masalah akan menjadi seorang wirausahawan yang sukses (Ratumbusyang, 2017)
</p>
<p>
    Untuk menjadi wirausahawan yang sukses, mahasiswa harus mampu membuka peluang bisnis, tanggap terhadap orang lain dan menjalin hubungan antar wirausaha. Sebagai upaya menekan angka pengangguran, perlu diciptakan peluang-peluang usaha baru, salah satunya di bidang kewirausahaan kesejarahan.
</p>
<div class="border rounded bg-warning-subtle p-2">
    Pada aktivitas ini, kalian membuat business plan produk dan jasa terkait kewirausahaan kesejarahan. Kalian diminta untuk bekerja sambil belajar secara individu untuk membuat business plan tersebut. Kalian bebas menyusun, merancang dan mengatur proyek yang kalian kerjakan.
</div>
<p class="mt-4 text-center text-lg">
    <b>Hal yang akan kalian lakukan: </b>
</p>
<ol class="mt-3">
    <li>
        Pelajari buku ajar dengan seksama;
    </li>
    <li>
        Pada bagian penentuan proyek, kalian akan menentukan proyek yang sesuai dengan isi wacana;
    </li>
    <li>
        Pada bagian perancangan proyek, kalian menyusun Langkah-langkah untuk menyelesaikan proyek;
    </li>
    <li>
        Pada bagian penyusunan jadwal proyek, kalian harus Menyusun jadwal untuk memperkirakan awal pelaksanaan hingga selesai;
    </li>
    <li>
        Pada bagian penyelesaian proyek dan monitoring dosen, kalian mengisi form monitoring keterlaksanaan jadwal penyelesaian proyek yang sebelumnya telah disepakati;
    </li>
    <li>
        Pada bagian penyusunan dan presentasi proyek, kalian mempresentasikan proyek yang telah dibuat.
    </li>
    <li>
        Pada bagian evaluasi proses dan hasil proyek, kalian menjawab pertanyaan pada kolom yang telah disediakan mengenai proyek yang telah dikerjakan.
    </li>
</ol>
<p class="text-lg">LENGKAPILAH KOLOM DI BAWAH INI!</p>
<p class="text-center"><b>Rancangan/Desain Proyek</b></p>
<p>
    Rancangan produk dan jasa yang dibuat harus berkaitan dengan kewirausahaan kesejarahan, boleh berupa produk, boleh berupa jasa, yang berpeluang dipasarkan di Kawasan sekitar wisata sejarah di daerah kalian.
</p>

<!-- input individu 1 rancangan proyek -->
<label for="produkJasa" class="mt-3 fw-semibold">
    Produk/Jasa yang akan dirancang
</label><br>
<textarea name="produkJasa" id="produkJasa" class="form-control w-100 mt-2" rows="5">{{ old('produkJasa', $jawabanIndividu['produk atau jasa yang akan dirancang'] ?? '') }}
</textarea>

<label for="analisaProduk" class="mt-3 fw-semibold">Analisa produk/jasa yang digunakan:</label><br>
<textarea name="analisaProduk" id="analisaProduk" class="form-control w-100 mt-2"
    rows="5">{{ old('analisaProduk', $jawabanIndividu['Analisa produk atau jasa yang digunakan'] ?? '') }}
</textarea>
<hr>
<p class="text-center"><b>Perencanaan Proyek</b></p>
<p>
    Tuliskan Langkah kerja untuk merancang proyek dan jasa, dimulai dari membuat business plan.
</p>

<!-- input individu 2 rancangan proyek -->
<label for="langkahKerja" class="mt-3 fw-semibold">Langkah kerja:</label><br>
<textarea name="langkahKerja" id="langkahKerja" class="form-control w-100 mt-2"
    rows="5">{{ old('langkahKerja', $jawabanIndividu['langkah kerja'] ?? '') }}
</textarea>
{{-- <p class="text-lg text-center mt-4"><b>Penyusunan Jadwal Pelaksanaan Proyek</b></p>
<p>
    Susunlah jadwal penyelesaian proyek tersebut. Setelah itu tunjukkan pada dosen kalian agar diberikan persetujuan pembuatan proyek tersebut.
</p>
<p class="text-center"><i>=== Tabel Rincian Jadwal Kegiatan Proyek ===</i></p>
<table class="shadow table table-bordered text-center">
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
            <td>1.</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2.</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3.</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
<p class="text-lg text-center mt-4"><b>Penyelesaian Proyek dan Monitoring</b></p>
<p>
    Setelah jadwal disusun dan disetujui, selanjutnya yaitu mengisi form monitoring proyek berikut.
</p>
<p class="mt-3 text-center">
    <i>Daftar Checklist Monitoring Proyek</i>
<table class="shadow table table-bordered">
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
            <td colspan="3"><b>Persiapan</b></td>
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
            <td colspan="3"><b>Pelaksanaan</b></td>
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
            <td colspan="3"><b>Presentasi</b></td>
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
<p class="text-center text-lg mt-3">
    <b>Penyusunan dan Presentasi Proyek</b>
</p>
<p class="text-center">Sekarang tugas kalian adalah mempresentasikan proyek yang telah kalian buat
</p>

<p class="text-center text-lg mt-3">
    <b>Evaluasi Proses dan Hasil Proyek</b>
</p>
<!-- input individu 3 evaluasi -->
<ol>
    <div class="row">
        <div class="col">
            <li class="mt-3">
                <label for="pendapatPengguna" class="fw-semibold">
                    Bagaimana pendapat kalian tentang hasil proyek yang telah kalian buat
                </label> <br> 
                <textarea class="form-control w-100 mt-2" name="pendapatPengguna" id="pendapatPengguna"
                    rows="5"></textarea>
            </li>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <li class="mt-3">
                <label for="perbaikanProyek" class="fw-semibold">
                    Apa yang bisa Anda lakukan agar proyek Anda menjadi lebih baik atau lebih sempurna
                </label> <br> 
                <textarea class="form-control w-100 mt-2" name="perbaikanProyek" id="perbaikanProyek" rows="5"></textarea>
            </li>
        </div>
    </div> --}}
    <div class="row mt-2">
        <div class="col">
            <button type="submit" class="btn btn-primary my-3">Simpan Jawaban</button>
        </div>
    </div>
</ol>
</form>
<hr>
<!-- Tombol Unduh -->
<a href="{{ url('/download/' . $filename) }}" class="btn btn-primary my-2"><i class="bi bi-download"></i> Unduh Template Laporan</a>

<!-- Form Upload Praktik Lapangan 1 -->
<form method="post" action="{{ route('uploadFileKesejarahan') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="category" value="kegiatan pembelajaran 3">
    <div class="mb-3">
        <label for="formFile1" class="form-label fw-semibold">Silahkan kumpulkan Lembar Proyek Individu</label>
        <input class="form-control" type="file" id="formFile1" name="file" accept=".pdf,application/pdf">
        <small>Kumpulkan dengan format .pdf</small>
    </div>

    <button type="submit" class="btn btn-primary">Kirim</button>
</form>
<hr>
<p class="text-lg mt-2">
    <b>Belajar Karakter Berwirausaha</b>
</p>

<p><b>Persiapan</b></p>
<ol>
    <li>
        Mahasiswa menentukan topik berwirausaha yang berkarakter dan dampak dari COVID 19 di berbagai sektor yang berhubungan dengan ekonomi.
    </li>
    <li>Mempersiapan tempat dan sound system oleh panitia.</li>
    <li>
        Mempersiapkan 2 narasumber tokoh wirausahawan lokal untuk berbagi mengenai Wirausaha Yang Bertanggung JawabPokok materi yang disampaikan adalah :
        <ol type="a">
            <li>
                Pengalaman mulai berwiraswasta.
            </li>
            <li>
                Alasan kenapa memilih bisnis tersebut.
            </li>
            <li>
                Bagaimana permasalahan dan peluang yang timbul dari bisnis tersebut
            </li>
            <li>
                Karakter Wirausahawan.
            </li>
            <li>
                Dampak COVID 19 terhadap perekonomian
            </li>
            <li>
                Motivasi peserta didik
            </li>
        </ol>
    </li>
</ol>
<p><b>Pelaksanaan</b></p>
<ol>
    <li>
        Mahasiswa membuat dokumen jurnal belajar.
    </li>
    <li>
        Mahasiswa memfasilitasi sebagai Moderator dan Pewara Acara.
    </li>
    <li>
        Peserta didik mendengarkan dan secara aktif didorong untuk aktif menggali informasi dari narasumber.
    </li>
    <li>
        Peserta didik diberikan tugas dengan mencatat rangkuman informasi yang telah disampaikan narasumber selama acara berlangsung.
    </li>
    <li>
        Peserta didik diberikan tugas dengan mencatat rangkuman informasi yang telah disampaikan narasumber selama acara berlangsung.
    </li>
</ol>
<p class="text-lg"><b>Orasi "Jika Aku Menjadi?"</b></p>
<p><b>Deskripsi</b></p>
<p>
    Seorang wirausahawan harus memiliki karakter yang visioner. Dalam menumbuhkan karakter tersebut, peserta didik diberikan kesempatannya untuk menyusun visi dan misinya ketika berkeinginan menjadi seorang pengusaha. Dengan diberikan tenggat waktu, peserta didik dituntut untuk menuangkan visi dan misinya secara spontan sehingga diharapkan peserta didik berani mengutarakan visi dan misinya serta memahami salah satu karakter wirausahawan.
</p>
<p><b>Persiapan</b></p>
<ol>
    <li>
        Peserta didik diminta mempersiapkan alat tulis dan secarik kertas.
    </li>
    <li>
        Mahasiswa mempersiapkan pertanyaan yang harus dijawab oleh rekan lainnya:
        <ol type="a">
            <li>
                Jika kamu memiliki modal dan menjadi seorang wirausahawan, kamu ingin menjadi pengusaha apa?
            </li>
            <li>
                Kalau kamu sudah menentukan menjadi pengusaha apa, maka apa visi dan misimu menjadi seorang pengusaha?
            </li>
        </ol>
    </li>

</ol>
<p><b>Pelaksanaan</b></p>
<ol>
    <li>
        Peserta didik diberikan pertanyaan yang telah disiapkan.
    </li>
    <li>
        Peserta diminta menjawab pertanyaan tersebut di secarik kertas dengan tenggat waktu 15 menit.
    </li>
    <li>
        Meminta audien maju ke depan berorasi tentang visi dan misinya ketika menjadi wirausahawan.
    </li>
    <li>
        Memberikan refleksi singkat dan mengijikan teman-temannya untuk bertanya.
    </li>
    <li>
        Peserta didik diajak untuk meneriakkan “Aku ingin menjadi Pengusaha ............. Aku pasti sukses!” Secara bersamaan.
    </li>
</ol>
<p>
    Hasil karya dan Cara Berorasi di depan umum pada kegiatan ini bukan menjadi pokok pembelajaran, namun memperlihatkan kecepatan, dan kemandiriannya dalam menentukan visi dan misinya sendiri untuk menjadi seorang wirausahawan.
</p>

@endsection