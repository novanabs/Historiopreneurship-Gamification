
@extends('layouts.main')

@section('container')

    {{-- Status Bar --}}
    <div class="progress rounded" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 0.001%" id="status_bar"></div>
    </div>

    
    <div class="mt-3">
        <div class="row">
            <div class="col">
                <h2>B. Kesejarahan</h2>
            </div>
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
        <div class="row materi-b" id="kegiatan-pembelajaran-1">
            <div class="col">
                <h3>Kegiatan Pembelajaran 1</h3>
                <p class="text-sm">2 JP x @50 menit = 100 menit.</p>
                <p>Sejarah sebagai salah satu 
                    bentuk peninggalan masa lalu yang
                    harus tetap kita rawat sebagai
                    ingatan kolektif manusia. Banyak
                    peninggalan sejarah yang tersebar
                    di berbagai sudut dunia, tak
                    terkecuali di Kalimantan Selatan.
                    Belajar sejarah bukan berarti hanya
                    belajar tentang masa lalu yang
                    tiada guna, namun akan memberikan manfaat untuk masa yang akan datang, karena
                    sejarah merupakan dialog antara peristiwa masa lampau dan perkembangan di masa
                    depan (Kochhar, 2008). Peninggalan tersebut salah satu bentuknya adalah bangunan
                    bersejarah.
                    </p>
                    <p>
                        Pariwisata di Indonesia mempunyai peluang besar karena memiliki daya tarik
tersendiri dimana setiap tujuan wisatanya memiliki unsur-unsur budaya, atraksi dan
sejarah dan setiap daerahnya memiliki ciri khas yang berbeda-beda. Undang-Undang
Nomor 9 Tahun 1990 menjelaskan bahwa pengembangan pariwisata di Indonesia
menggunakan konsep budaya atau culture tourism dengan mempertimbangkan
potensi seni dan budaya yang beraneka ragam yang tersebar pada daerah tujuan
wisata daerah wisata (Yoeti, 2006). Sejalan dengan Undang-Undang Nomor 10 Tahun 
7
2009 yang menjelaskan bahwa peninggalan purbakala, peninggalan sejarah, seni dan
budaya yang dimiliki oleh bangsa Indonesia merupakan sumber daya dan modal
pembangunan kepariwisataan untuk meningkatkan kesejahteraan rakyat (Kirom,
Sudarmiatin, & Putra, 2016).

                    </p>
                    <p>
                        Peninggalan bersejarah mempunyai daya tarik yang besar yang dapat menarik
wisatawan. Potensi pariwisata berbasis sejarah budaya merupakan salah satu aset
yang memiliki potensi untuk dikembangkan oleh setiap daerah (Adi et al, 2013).
Pengembangan potensi sektor pariwisata di daerah selain untuk menambah
pendapatan daerah juga dapat memperkenalkan sejarah serta melestarikan budaya
daerah wisata tersebut.

                    </p>
                    <p>
                        Wisata sejarah adalah kegiatan wisata yang bertujuan untuk mengunjungi
tempat-tempat yang memiliki nilai kesejarahan. Nilai kesejarahan yang terdapat pada
daerah wisata itulah yang menjadi objek wisata sejarah yang ditawarkan. Objek wisata
tersebut beberapa diantaranya adalah arsitektur bangunan, kebudayaan dan
kepercayaan masa lampau (Ishak, 2020). Obyek wisata yang berupa tempat atau
keadaan alam, tata hidup, seni budaya serta peninggalan sejara bangsa perlu
dikembangkan secara terencana serta inovatif karena obyek wisata ini merupakan titik
sentral dari pengembangan pariwisata nasional (Suwena & Widyamatja, 2017).

                    </p>
                    <p>
                        Daya tarik wisata sejarah adalah para wisatawan dapat menikmati keunikan
dari keragaman budaya dan sejarah di daerah yang dikunjunginya. Tujuan dari wisata
sejarah bagi para wisatawan adalah mempelari budaya daerah untuk memenuhi
kebutuhan serta kepuasan rekreasinya, selain itu mereka mendapatkan edukasi dari
peristiwa sejarah dan budaya daerah wisata (Jamal, bustami, & Desma).
Dikemukakan oleh Irdika (Pusaka Budaya dan Pariwisata, 2007)  terdapat 10 elemen
budaya yang menjadi daya tarik wisata yakni: (1) Kerajninan, (2) tradisi, (3) sejarah,
(4) arsitektur, (5) makanan lokal, (6) seni musik, (7) cara hidup masyarakat, (8) agama,
(9) bahasa dan (10) pakaian lokal. Daya tarik wisata juga dipengaruhi oleh penyajian
dari eksistensi dan keunikan dari obyek wisatayang ada yang dikemas menjadi ragam
atraksi wisata yang menarik. 

                    </p>
                    <p>
                        Setiap daerah memiliki sejarah budaya yang unik sehingga menjadi
karakteristik pembeda dengan daerah lain. Perbedaan karakteristik sejarah budaya
tersebut merupakan potensi dari pariwisata sejarah di setiap daerah (Suyatmin & Edy,
2017). Penelitian yang dilakukan oleh Aziz (2018) menyimpulkan bahwa aspek daya
tarik kota Banjarmasin salah satunya adalah wisata heritage dan peninggalan sejarah. Sebagai kota yang dijuluki sebagai kota seribu sungai, Banjarmasin juga dipenuhi
dengan tempat-tempat bersejarah yang menjadi daya tarik wisatawan lokal maupun
non lokal. Daya tarik wisata sejarah di kota Banjarmasin dipengaruhi oleh keberadaan
sungai dan peninggalan sejarah kerjaan Banjar dan jaman pejuangannya. Sejarah
kerajaan banjar juga memiliki nuansa Islami sehingga Kebanyakan dari tempat
bersejarah yang dikunjungi adalah masjid yang dibangun pada pemerintahan zaman
dahulu yang masih dipelihara dengan menjaga bentuk aslinya serta makam keramat
para wali yang berpengaruh menyebarkan agama Islam di Banjarmasin. 
                    </p>
                    <p>
                        Seperti yang terjadi pada obyek wisata pasar terapung di Kuin yang mengalami
penurunan aksistensinya karena aktivitas dan kegiatan ekonomi masyarakat
berpindah ke darat (Pradana, 2020). Dikembangkannya Pasar Terapung buatan di
Siring Tandean juga membuat Pasar Terapung Muara Kuin semakin terpinggirkan.
Masalah lain adalah Kurangnya pengemasan daya tarik obyek wisata dimana
seharusnya daerah tujuan wisata  memiliki keunikan, kekhasan dan dan daya tarik
tersendiri, baik berupa alam maupun masyarakat serta budayanya (Huiwen & Hassink,
2017). Selain itu faktor lingkungan disekitar juga mempengaruhi seperti jalan yang
sempit, kondisi lingkungan dan fasilitas yang kurang memadai, serta waktu menikmati
wisata terbatas dari pukul 03.00 dini hari hingga pukul 07.00 pagi wita saja. Penurunan
keberadaan obyek wisata Pasar Terapung Kuin juga menyebabkan hilangnya nilainilai
sosial
dan
budaya
yang
terkandung
di
dalam
Pasar
Terapung
itu
sendiri
(Gibson,

2015).


                    </p>
                    <p>
                        Peninggalan bersejarah mempunyai daya tarik yang besar yang juga dapat
menarik wisatawan mancanegara. Sehingga untuk mengembangkan wisata sejarah
Kota Banjarmasin dengan memberdayakan elemen dan lansekap budaya sebagai
objek wisata serta nilai-nilai kultural yang terdapat di Kota Banjarmasin, diperlukan
sebuah identifikasi guna menemukan potensi objek wisata sejarah berdasarkan
kelayakan lanskap untuk selanjutnya diketahui strategi pengembangan berdasarkan
variabel kelayakan lanskap yang perlu dioptimalkan guna meningkatkan
kesejahteraan kota dan masyarakat.

                    </p>
                    <p><b>Destinasi Wisata Banjarmasin Favorit</b></p>
                    <p><b>Air Terjun Haratai</b></p>
                    <img src="#" alt="Gambar Air Terjun Haratai">
                    <p>
                        Keistimewaan Air Terjun Haratai terletak pada pemandangan alamnya yang
indah. Air Terjun Haratai seakan-akan diapit oleh tebing bebatuan dan pepohonan di
kanan kiri. Meskipun memiliki debit air yang deras, Anda masih bisa masuk ke perairan
untuk menikmati sensasi menyegarkan airnya. Di bagian pinggir air terjun, airnya tidak
begitu dalam masih bisa dinikmati dengan baik meski suhunya dingin menusuk.

                    </p>
                    <p>
                        Selain menikmati pemandangan dan kesegaran air terjun. Anda bisa
melakukan terapi psikologis di tempat ini. Suara air terjunnya sangat menenangkan.
Puas mendengarkan suara air, carilah tempat yang bagus untuk mengambil foto air
terjun atau foto selfie dengan background air terjun.

                    </p>
                    <p>
                        Ada sebuah nilai luhur yang membuat saya kagum, bahwa kelestarian alam
lebih berharga dari harta ataupun materi lainnya. Sehingga keberadaan air terjun
menjadi sangat dissakralkan bagi Suku Dayak Meratus.

                    </p>
                    <p>
                        Air Terjun Haratai, sebuah air terjun yang sangat elok di tengah alam yang
masih asri. Air Terjun Haratai adalah air terjun yang berada di deretan pegunungan
Meratus, serta berada di kawasan wisata Loksado.

                    </p>
                    <p>
                        <b>
                            Bamboo Rafting
                        </b>
                    </p>
                    <img src="#" alt="Gambar Bambu Rafting">
                    <p>Anda yang hobi menguji adrenalin akan mendapatkan sensasi mendebarkan 
                        ketika berlibur ke tempat wisata di Banjarmasin seperti Bamboo Rafting. Tempat ini
                        digadang-gadang sebagai tempat rafting paling unik di Banjarmasin. Keunikan dari
                        Bamboo Rafting adalah media arung jeramnya yang menggunakan bambu atau rakit
                        bukan perahu karet.
                        </p>
                    <p>Selain menikmati sensasi mendebarkan mengelilingi sungai, Anda juga akan
                        dimanjakan dengan pemandangan kiri kanan yang asri dan indah. Tempat wisata ini
                        masih sangat asri dan menyejukkan dengan pepohonan rindang. Meski dilakukan di
                        siang hari, Anda masih bisa merasakan hawa sejuknya. </p>

                    <p>
                        <b>
                            Pasar Terapung
                        </b>
                    </p>
                    <img src="#" alt="Gambar pasar terapung">
                    <p>Anda yang hobi pergi ke pasar akan menemukan konsep pasar tradisional yang
                        berbeda saat mengunjungi Pasar Terapung Banjarmasin. Pasar di sini bukan berdiri
                        di atas daratan tapi dibuka di perahu klotok tepat di atas Sungai Martapura.
                        </p>
                        <p>
                            Selain mengagumi keunikan para pedagang pasar terapung, Anda juga bisa
menikmati penjelajahan Sungai Martapura dengan menyewa perahu. Coba
bayangkan, sensasi menyenangkan kuliner di atas perahu sambil melintasi sungai?
                        </p>
                        <p><b>Pemandian Air Panas Tanuhi</b></p>
                        <img src="#" alt="Gambar Pemandian Air Panas Tanuhi">
                        <p>
                            Mandi air panas di kolam terbuka bersama pengunjung lainnya merupakan 
konsep utama Pemandian Air Panas Tanuhi. Tempat wisata ini setidaknya difasilitasi
dengan empat kolam renang, lapangan tenis, restoran, penginapan dan fasilitas
lainnya.
                        </p>
                        <p>
                            Selain menawarkan kolam mandi air panas, tempat wisata alam Banjarmasin
ini juga menyuguhkan view pegunungan yang sangat indah. Karena kolam terbuka,
otomatis Anda bisa melihat pemandangan yang tersaji dengan lebih mudah. Jika
sudah merasa haus atau lelah, ada restoran dan cottage yang siap melayani.

                        </p>
                        <p>
                            <b>
                                Taman Wisata Alam Pulau Bakut
                            </b>
                        </p>
                        <img src="#" alt="Gambar Taman WIsata Alam Pulau Bakut">
                        <p>
                            Manjakan mata Anda dengan melihat pemandangan asri di Taman Wisata 
Alam Pulau Bakut. Hutan Mangrove di kawasan wisata ini sangat indah dan rindang
membuat udara di sekitarnya selalu sejuk. Anda yang suka dengan pemandangan
hutan dan pepohonan akan merasa terpikat dengan penataan ruangnya.

                        </p>
                        <p>
                            Salah satu keistimewaan di Taman Wisata Alam Pulau Bakut adalah jembatan
panjangnya. Anda bisa mengambil foto selfie dengan latar belakang pepohonan di
sekelilingnya. Atau mengambil foto jarak jauh dengan background jembatan. Intinya,
Anda jangan lupa bawa kamera ketika berencana datang ke sini.

                        </p>
                        <p>
                            Dari kelima tempat wisata di atas, mana yang ingin Anda kunjungi? Semua
tempat wisata Banjarmasin memiliki potensi pariwisata. Selain banyak daya tariknya,
masing-masing tempat wisata juga sudah dilengkapi dengan beragam fasilitas.
Fasilitas tersebut membantu para pengunjung untuk menikmati lokasi wisata lebih
lama.
                        </p>
                        <p>PERTANYAAN PEMANTIK</p>
                        <p><b>"Siapakah di antara kalian yang hobi wisata atau jalan-jalan?" </b></p>
                        <p>Dalam melakukan pembelajaran ini, ditayangkan sebuah video tentang wisata yang ada di
                            Kalimantan Selatan.</p>
            </div>
        </div>
        <div class="row materi-b" id="kegiatan-pembelajaran-2">
            <div class="col">
                <h3>Kegiatan Pembelajaran 2</h3>
                <p class="text-sm">6 JP x @50 menit = 300 menit
                </p>
                <p>
                   <b>CPMK:</b> 
                </p>
                <ol>
                    <li>Mahasiswa mampu mengorganisasikan objek kesejarahan berdasarkan hasil identifikasi dan
                        eksplorasi dalam pemetaan.</li>
                    <li>Mahasiswa mampu mengasesmen objek kesejarahan berdasarkan hasil identifikasi.
                    </li>
                    <li>Mahasiswa mampu mendesain potensi usaha berdasarkan hasil kelayakan objek (object
                        pattern and feasibility).
                        </li>
                </ol>
            </div>
        </div>
        <div class="row materi-b" id="lembar-analisa-kelompok">
            <div class="col">
                <h3>LEMBAR ANALISA KELOMPOK</h3>
                <p class="text-lg">AKTIVITAS EKSPLORASI MAHASISWA</p>
                <p>Berdasarkan hasil identifikasi terkait objek kesejarahan yang ada di daerah kalian, petakanlah
                    objek-objek kesejarahan tersebut.
                    <br>Lakukanlah analisa secara berkelompok! </p>
                <p>Anggota Kelompok</p>
                <ol>
                    <li>Nama: </li>
                    <li>Nama: </li>
                    <li>Nama: </li>
                    <li>Nama: </li>
                    <li>Nama: </li>
                </ol>
            </div>
        <div class="row mt-3">
            <div class="col">
                <label for="objek1">Objek 1</label><br>
                <textarea name="objek1" id="" rows="5"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="objek2">Objek 2</label><br>
                <textarea name="objek2" id="" rows="5"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="objek3">Objek 3</label><br>
                <textarea name="objek3" id="" rows="5"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="objek4">Objek 4</label><br>
                <textarea name="objek4" id="" rows="5"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="objek5">Objek 5</label><br>
                <textarea name="objek5" id="" rows="5"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="objek6">Objek 6</label><br>
                <textarea name="objek6" id="" rows="5"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="objek7">Objek 7</label><br>
                <textarea name="objek7" id="" rows="5"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="objek8">Objek 8</label><br>
                <textarea name="objek8" id="" rows="5"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="objek9">Objek 9</label><br>
                <textarea name="objek9" id="" rows="5"></textarea>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col">
                <label for="objek10">Objek 10</label><br>
                <textarea name="objek10" id="" rows="5"></textarea>
            </div>
        </div>
    </div>
        <div class="row materi-b" id="lembar-analisa-individu">
            <div class="col">
                <h2>LEMBAR ANALISA INDIVIDU</h2>
                <h3>AKTIVITAS UNTUK KERJA</h3>
                <p>Berdasarkan hasil identifikasi dari setiap kelompok, analisa dan asesmen lah hasil pemetaan
                    tersebut dengan melengkapi kolom di bawah ini. Selanjutnya, diskusikan di kelas. 
                 </p>
                <p class="text-lg">LENGKAPILAH KOLOM DI BAWAH INI!</p>
            </div>
        
        <div class="row">
            <div class="col">
                <div class="row mt-3">
                    <div class="col">
                        <label for="objekWisata">Objek Wisata</label><br>
                        <textarea name="objekWisata" id="" rows="5"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="objekWisata">Objek Kesejarahan</label><br>
                        <textarea name="objekWisata" id="" rows="5"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="objekWisata">Urgensi Objek Kesejarahan</label><br>
                        <textarea name="objekWisata" id="" rows="5"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="objekWisata">Urgensi Kesejarahan</label><br>
                        <textarea name="objekWisata" id="" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h3 class="text-center">INDIKATOR PENILAIAN KELAYAKAN OBJEK  KESEJARAHAN </h3>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Aspek</th>
                        <th>Bobot</th>
                        <th>Keterangan</th>
                </tr>
                </thead>
                <tr>
                    <td>1.</td>
                    <td>Daya Tarik</td>
                    <td>6</td>
                    <td>Daya tarik merupakan faktor utama
                        alasan seseorang melakukan
                        perjalanan wisata sejarah.
                        </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Aksesibilitas</td>
                    <td>5</td>
                    <td>Aksesbilitas merupakan faktor penting
                        yang mendukung wisatawan dapat
                        melakukan kegiatan wisata sejarah.
                        </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Sarana Prasarana</td>
                    <td>3</td>
                    <td>Sarana dan prasarana bersifat
                        sebagai penunjang dalam kegiatan
                        wisata sejarah.
                        </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Partisipasi Masyarakat</td>
                    <td>6</td>
                    <td>Partisipasi masyarakat adalah
                        keterlibatan sukarela oleh masyarakat
                        dalam pembangunan objek sejarah di
                        lingkungan mereka sendiri.</td>
                </tr>
            </table>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="text-center mt-4">LAMPIRAN <br> FORM SYARAT KELAYAKAN OBJEK KESEJARAHAB</h3>
                <table class="table table-bordered  table-responsive-md">
                    <thead>
                        <tr>
                            <th rowspan="2">NO</th>
                            <th rowspan="2">ASPEK</th>
                            <th rowspan="2">Sub Aspek</th>
                            <th colspan="5">Skor</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                    </thead>
                    <tr>
                        <td rowspan="4">1.</td>
                        <td rowspan="4">Daya Tarik</td>
                        <td>1. Memiliki keunikan atau ciri khas sejarah lokal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2. Objek sejarah memiliki lokasi yang bersih</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3. Kawasan objek sejarah terjamin keamanannya</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4. Keserasian bangunan objek dengan lingkungan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="3">2.</td>
                        <td rowspan="3">Aksesbilitas</td>
                        <td>1. Kondisi jalan menuju objek sejarah terlampau mulus</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2. Dekat dari pusat kota</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3. Waktu tempuh dari pusat kota tidak terlalu lama/jauh</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="4">3.</td>
                        <td rowspan="4">Sarana Prasarana</td>
                        <td>1. Memiliki fasilitas umum seperti toilet dan tempat wudhu</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2. Memiliki <i>gif/merchandise store</i> di sekitar objek sejarah</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3. Memiliki warung dan rumah makan di sekitar objek sejarah</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4. Memiliki areal parkir yang cukup untuk wisatawan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="7">4.</td>
                        <td rowspan="7">Partisipasi Masyarakat</td>
                        <td>1. Objek kesejarahan dapat mensejahterakan tuan rumah atau masyarakat sekitar</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2. Masyarakat sekitar menyambut kehadiran wisatawan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3. Masyarakat menyediakan fasilitas kenyamanan wisata</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4. Masyarakat menyediakan pemandu wisata</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5. Pelaku wisata berasal dari masyarak lokal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6. Terdapat penjual cindremata/oleh-oleh khas wisata setempat yang dibuat masyarakat lokal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7. Masyarakat turut serta dalam menjaga keamanan, kenyamanan, ketertiban, dan kebersihan daerah wisata</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
        <div class="row materi-b" id="kegiatan-pembelajaran-3">
            <div class="col">
                <h3>Kegiatan Pembelajaran 3</h3>
                <p class="text-sm">4 JP x @50 menit = 200 menit </p>
                <p><b>CPMK:</b></p>
                <ol>
                    <li>Mahasiswa mampu menyusun laporan terkait rambu-rambu wisata kesejarahan
                        berbasis kewirausahaan berdasarkan hasil observasi lapangan.
                        </li>
                </ol>
                <p class="text-lg">LAPORAN KEGIATAN</p>
                <p>AKTIVITAS UNJUK KERJA</p>
                <p>Berdasarkan hasil penilaian kelayakan objek sejarah yang dipilih dari setiap kelompok,
                    buatlah laporan kegiatan tersebut dengan memuat “object pattern and feasibility”,
                    selanjutnya diskusikan di kelas. </p>
            </div>
        </div>
        <div class="row materi-b" id="refleksi">
            <div class="col">
                <h2>REFLEKSI</h2>
                <p>Setelah mempelajari buku ajar ini, bagaimana pemahaman kalian terhadap materi? 
 
                    Isilah penilaian diri ini dengan sejujur-jujurnya dan sebenar- benarnya sesuai dengan
                    perasaan kalian ketika mengerjakan suplemen bahan materi ini! Bubuhkanlah tanda centang
                    (√) pada salah satu gambar yang dapat mewakili perasaan kalian setelah mempelajari materi
                    ini! </p>
                <img src="" alt="Gambar 5 Emote">

                <p><b>Jawablah pertanyaan berikut!</b></p>
                <ol>
                    <li class="mt-3"><label for="">Apa yang sudah kalian pelajari?</label>  <br> <textarea name="" id=""rows="5"></textarea></li>
                    <li class="mt-3"><label for="">Apa yang kalian kuasai dari materi ini?</label>  <br> <textarea name="" id=""rows="5"></textarea></li>
                    <li class="mt-3"><label for="">Bagian apa yang belum kalian kuasai?</label>  <br> <textarea name="" id=""rows="5"></textarea></li>
                    <li class="mt-3"><label for="">Apa upaya kalian untuk menguasai yang belum kalian kuasai?</label>  <br> <textarea name="" id=""rows="5"></textarea></li>
                </ol>
            </div>
        </div>

    </div>

    <script>
        // Mengambil semua class sub
        const materi_a = document.getElementsByClassName('materi-b');

        // Navigasi Soal
        var $sub = 0;
        var $progress = 0;

        // Hide semua bab
        function hide_semua_sub(){
            for(let i=0;i<=5;i++){
                console.log(materi_a[i])
                materi_a[i].style.display = 'none';
            }
            console.log($sub,$progress)
        }
        hide_semua_sub();
        
        // Menampilkan sub
        function show_sub($no){
            materi_a[$no].style.display = 'block';
        }
        show_sub($sub);

        // Navigasi tombol
        function nav_tombol(){
            if($sub == 5){
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
            let persen = $progress * 20;
            status_bar.style.width = `${persen}%`;
        }

        // Testing
        console.log(materi_a)
        
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