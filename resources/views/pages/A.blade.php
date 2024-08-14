@extends('layouts.main')

@section('container')

<div class="mt-3">
    {{-- Status Bar --}}
    <div id="halaman_saat_ini">{{ session('active_menu_sub') }}</div>

    <div class="progress rounded" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 0.001%" id="status_bar"></div>
      </div>
    
    
        <div class="row mt-3" id="">
            <div class="col">
                <h2>A. Informasi Umum</h2>
            </div>
        </div>
        <div class="row mb-3 mt-3">
            <div class="col-6">
                <button class="btn btn-primary" onclick="prev()" id="prev">Sebelumnya</button>
            </div>
            <div class="col-6 text-end">
                <button class="btn btn-primary" onclick="next()" id="next">Selanjutnya</button>
            </div>
        </div>
        <div class="row materi-a" id="CPL">
            <div class="col">
                <h3>Capaian Pembelajaran Lulusan (CPL)</h3>
                <p>CPL yang ingin dicapai dalam pembelajaran ini adalah mahasiswa
                    mampu mengaplikasikan teori dan nilai-nilai kewirausahaan dalam
                    kehidupan nyata berdasarkan potensi kewirausahaan kesejarahan
                    (historiopreneurship) beserta berbagai aspek pendukungnya, dengan
                    konten kesejarahan, kewirausahaan dan kepariwisataan yang mengacu 
                    pada kebutuhan materi, Merdeka Belajar Kampus Merdeka, dan project 
                    based learning. </p>
            </div>
        </div>
        <div class="row materi-a" id="CPMK">
            <div class="col">
                <h3>Capaian Pembelajaran Mata Kuliah (CPMK)</h3>
                <p>Melalui media ajar berbasis <i>Project based learning</i> (PjBL) ini, diharapkan:</p>
                <table class="table table-striped table-sm">
                    <tr>
                        <td class="text-nowrap" ><b>CPMK 1</b></td>
                        <td>Mahasiswa mampu mendeskripsikan konten dan karakter objek berdasarkan kesejarahan serta urgensinya dalam perspektif budaya dan nilai karakter
                            </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap" ><b>CPMK 2</b></td>
                        <td>Mahasiswa mampu mengorganisasikan objek
                            kesejarahan berdasarkan hasil identifikasi dan
                            eksplorasi dalam pemetaan
                            </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap" ><b>CPMK 3</b></td>
                        <td>Mahasiswa mampu mengasesmen objek kesejarahan
                            berdasarkan hasil identifikasi
                            </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap" ><b>CPMK 4</b></td>
                        <td>Mahasiswa mampu mendesain pola perjalanan (travel
                            pattern) objek berdasarkan hasil kelayakan
                            
                            </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap" ><b>CPMK 5</b></td>
                        <td>Mahasiswa mampu menyusun laporan terkait ramburambu
                            wisata kesejarahan berbasis kewirausahaan
                            berdasarkan hasil observasi lapangan
                            
                            </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap" ><b>CPMK 6</b></td>
                        <td>Mahasiswa mampu menguraikan perspektif terkait
                            pemasaran kewirausahaan kesejarahan melalui
                            diskusi kelompok dan pakar                            
                            </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap" ><b>CPMK 7</b></td>
                        <td>Mahasiswa mampu merancang produk dan jasa
                            terkait kewirausahaan kesejarahan berdasarkan
                            konsep kewirausahaan                            
                            </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap" ><b>CPMK 8</b></td>
                        <td>Mahasiswa memiliki keterampilan memasarkan
                            produk dan jasa terkait kewirausahaan kesejarahan
                            berdasarkan hasil praktik lapangan 
                            </td>
                    </tr>
                </table>
            </div>
        
        <div class="row" id="hal">
            <div class="col">
                <h2>HAL YANG HARUS DIPERHATIKAN SEBELUM MEMULAI PROSES PEMBELAJARAN </h2>
                <p>Dalam proses belajar berbasis PjBL ini, sangat penting sekali diajukan
                    sebuah pertanyaan atau studi kasus untuk menstimulasi mahasiswa agar
                    mengekplorasi pembahasan masalah melalui pendalaman materi, lalu
                    menganalisisnya dari berbagai sudut pandang dan teori, yang akhirnya
                    mengkonfirmasi masalah tersebut melalui diskusi, refleksi dan
                    pengambilan kesimpulan. Mahasiswa diberikan stimulus yang memicu
                    pembelajaran aktif dan menyenangkan sesuai dengan konsep merdeka
                    belajar untuk mengkonstruksi pengetahuannya sendiri melalui pengalaman
                    yang nyata. Pada akhir kegiatan pembelajaran, mahasiswa berkreasi
                    membuat sebuah project bisnis dengan memanfaatkan potensi wirausaha
                    dalam berbagai bidang pariwisata yang sudah teridentifikasi. </p>
            </div>
        </div>
    </div>
        <div class="row materi-a" id="peran-dosen">
            <div class="col">
                <h2>Peran Dosen</h2>
                <ol>
                    <li>Fasilitator: memfasilitasi kegiatan, menyediakan media
                        belajar, lembar belajar, lembar kerja dan lain-lain. </li>
                    <li>Moderator: memoderasi diskusi, memberikan pertanyaan
                        pemantik, menutup dengan kesimpulan.</li>
                    <li>Penyedia Informasi: menyediakan artikel, video, tautan
                        informasi. </li>
                    <li>Mentor: membimbing peserta didik dalam mengembangkan
                        proyek. </li>
                </ol>
            </div>
        </div>
        <div class="row materi-a" id="sarana-dan-prasarana">
            <div class="col">
                <h2>Sarana dan Prasarana</h2>
                <p><b>Sarana Pembelajaran</b></p>
                <ol>
                    <li> Digital dan Nondigital berupa Buku paket, e-book, portal pembelajaran,
                        tautan edukasi di internet, surat kabar, majalah, televisi, radio, teks iklan
                        di ruang publik, tempat wisata kesejarahan.
                        </li>
                    <li>Video pembelajaran di internet.</li>
                    <li>Aplikasi “BAHIMAT” yang telah dikembangkan dan diunduh dari
                        Google Playstore.</li>
                </ol>
            </div>
        
        <div class="row">
            <div class="col">
                <p><b>Prasarana Pembelajaran</b></p>
                <ol>
                    <li>  Perangkat keras (PC, Laptop, Smartphone, Tablet, Headset).
                        </li>
                    <li> Perangkat lunak (Aplikasi pembelajaran: Whatsapp, Zoom, Google
                        Classroom, Media Sosial: Youtube, Instagram, dan lain-lain). </li>
                    <li>Jaringan internet</li>
                </ol>
            </div>
        </div>
    </div>
        <div class="row materi-a" id="kolaborasi-narasumber">
            <div class="col">
                <h2>Kolaborasi dan Narasumber</h2>
                <p class="text-justify">
                    Apabila dosen dan mahasiswa mempunyai keterbatasan untuk memperoleh konten, dosen bisa mengundang narasumber ahli misalnya dari guru mata pelajaran produktif, praktisi di berbagai bidang, dan bisa menggunakan sarana sekitar sebagai sumber belajar primer maupun sekunder. 
                </p>
            </div>
        </div>
        <div class="row materi-a" id="cara-penggunaan">
            <div class="col">
                <h2>Cara Penggunaan</h2>
                <ul>
                    <li>Buku ajar ajar ini dirancang untuk membantu dosen
                        untuk melaksanakan kegiatan program
                        kewirausahaan kesejarahan (historiopreneurship) di
                        perguruan tinggi yang menerapkan Merdeka Belajar
                        Kampus Merdeka.</li>
                    <li>Di dalam buku ajar ajar ini ada beberapa aktivitas
                        yang saling berkaitan, dengan beberapa formatif
                        asesmen sebagai diagnostik asesmen dan asesmen
                        sumatif sebagai ujung dari proses pembelajaran.
                        Disarankan agar buku ajar ajar ini dilakukan sesuai
                        dengan urutan di alur CPMK. </li>
                    <li>Waktu yang direkomendasikan untuk pelaksanaan buku ajar ajar ini adalah 1 semester atau 14 kali tatap muka dengan durasi kurang lebih 28 JP. Sebaiknya ada jeda waktu antar aktivitas agar di satu sisi para dosen mempunyai waktu yang cukup untuk melakukan persiapan materi untuk memantik diskusi dan refleksi mahasiswa. Mahasiswa juga mempunyai waktu untuk berpikir, berefleksi, dan menjalankan masing-masing aktivitas dengan baik.</li>
                </ul>
            </div>
        </div>
        <div  class="materi-a" id="tahapan">
        <div class="row">
            <div class="col">
                <h2>Tahapan Kegiatan Pembelajaran Projeck Based Learning</h2>
                <p><b>Merdeka Belajar</b></p>
                <ol>
                    <li>Mulai dari diri: Mahasiswa diberi pertanyaan pemantik oleh dosen dan mencurahkannya
                        berbagai pendapat dan pengalamannya.
                        </li>
                    <li>Eksplorasi konsep: Mahasiswa melihat tayangan foto maupun video wisata
                        sejarah yang ada di Kalimantan Selatan.
                        </li>
                    <li>Ruang kolaborasi: Mahasiswa melakukan identifikasi dan asesmen potensi wisata
                        sejarah secara berkelompok.
                        </li>
                    <li>Refleksi terbimbing: merefleksi hasil kajiannya bersama dengan kelompok.
                    </li>
                    <li>Demokrasi konstekstual: Mengerjakan lembar analisis individu.
                    </li>
                    <li>Elaborasi: Mahasiswa memperdalam materi pengayaan untuk memperluas pemahaman.
                    </li>
                    <li>Koneksi antar materi: Mahasiswa membuat kesimpulan materi dan keterkaitannya
                        dengan materi atau mata kuliah lain. </li>
                    <li>Aksi nyata: Mahasiswa melakukan presentasi hasil kajian bersama kelompok. </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p><b>Project Based Learning</b></p>
                <ol>
                    <li>Pertanyaan mendasar: Mahasiswa secara berkelompok menentukan topik "objek wisata
                        sejarah" yang akan dijadikan potensi wirausaha wisata kesejarahan.                        
                        </li>
                    <li>Desain perencanaan: Mahasiswa secara berkelompok menyusun desain perencanaan
                        produk melalui marketing mix, merencanakan startegi pemasarannya melalui teknologi
                        digital.                        
                        </li>
                    <li>Menyusun jadwal: Mahasiswa secara berkelompok membuat jadwal langkah-langkah
                        penyediakan produk dan jadwal pembuatan sampai dengan pengoperasian pemasaran.                        
                        </li>
                    <li>Monitor perkembangan: Mahasiswa secara berkelompok memonitor perkembangan
                        pemasaran produknya selama 2 minggu.                        
                    </li>
                    <li>Uji hasil: setelah 2 minggu melakukan pemasaran, mahasiswa melaporkan hasil
                        pemasaran produknya.
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

    <script>
        // Mengambil semua class sub
        const materi_a = document.getElementsByClassName('materi-a');

        // Navigasi Soal
        var $sub = 0;
        var $progress = 0;

        // Hide semua bab
        function hide_semua_sub(){
            for(let i=0;i<=6;i++){
                // console.log(materi_a[i])
                materi_a[i].style.display = 'none';
            }
        }
        hide_semua_sub();
        
        // Menampilkan sub
        function show_sub($no){
            materi_a[$no].style.display = 'block';
        }
        // show_sub($sub);

        // Show Sub by Session
        const halaman_saat_ini = document.getElementById('halaman_saat_ini').innerHTML;
        console.log(halaman_saat_ini);
        document.getElementById(halaman_saat_ini).style.display = 'block'

        // Navigasi tombol
        function nav_tombol(){
            if($sub == 6){
                document.getElementById('next').disabled = true;
            }else if($sub == 0){
                document.getElementById('prev').disabled = true;
            }else{
                document.getElementById('prev').disabled = false;
                document.getElementById('next').disabled = false;
            }
        }
        nav_tombol();

        // Status Bar
        
        const status_bar = document.getElementById('status_bar');
        function update_status(){
            let persen = $progress * 16.66666667;
            status_bar.style.width = `${persen}%`;
        }

        // Testing
        // console.log(materi_a)
        
        function next(){
            console.log('Selanjutnya',$sub)
            hide_semua_sub();
            $sub++;
            if($sub > $progress){
                $progress++; 
            }      
            show_sub($sub);
            nav_tombol()
            update_status()
        }
        
        function prev(){
            console.log('Sebelumnya',$sub)
            hide_semua_sub();
            $sub--;
            show_sub($sub);
            nav_tombol()
        }

    </script>
@endsection

