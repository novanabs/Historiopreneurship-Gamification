@extends('layouts.main')

@section('container')

<style>
    #particel-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        /* Agar tidak mengganggu interaksi UI */
        overflow: hidden;
    }

    .particle {
        position: absolute;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 20px solid yellow;
        /* Warna bintang */
        transform: rotate(35deg);
        animation: fall linear forwards, rotate 3s linear infinite;
    }

    .particle::before,
    .particle::after {
        content: '';
        position: absolute;
        top: -15px;
        left: -10px;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 20px solid yellow;
    }

    .particle::before {
        transform: rotate(-70deg);
    }

    .particle::after {
        transform: rotate(70deg);
    }

    @keyframes fall {
        to {
            transform: translateY(100vh);
            opacity: 0;
        }
    }
</style>


<?php

$_SESSION['data_soal'] = json_decode($soal->data_soal, true);
// dd($_SESSION['data_soal']);

$data_soal = $_SESSION['data_soal'];
$data_dari_json = json_encode($soal->data_soal);
$soal_sekarang = $_SESSION['soal_sekarang'];
$jawaban = $_SESSION['jawaban'];
$nilai = $_SESSION['nilai'];

// Navigasi Soal
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // if(isset($_POST['jawaban'])){
    //     $jawaban[$soal_sekarang] = $_POST['jawaban'];
    // }


    // Navigasi Soal
    if (isset($_POST['next'])) {
        $soal_sekarang += 1;
    } elseif (isset($_POST['prev'])) {
        dd($_SERVER['REQUEST_METHOD']);
        $soal_sekarang -= 1;
    } elseif (isset($_POST['submit'])) {
        dd();
    }


}
$soal = $data_soal[$soal_sekarang];   
?>
<p id="kumpulan-soal" hidden>{{$data_dari_json}}</p>

<div class=" mb-3" id="halaman-latihan">
    <h1>Latihan</h1>


    <div class="row">

        <div class="col-8 p-2">
            <div class="progress rounded" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 0.001%"
                    id="bar"></div>
            </div>
            <div class="card shadow mt-2">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <b>Soal No. <span id="no-soal"></span></b>
                        </div>
                        <div class="col text-end">
                            <b><i class="bi bi-clock text-end"></i> <span id="menit">30</span>:<span
                                    id="detik">00</span></b>
                        </div>
                    </div>
                </div>
                {{-- Menampilkan Soal --}}

                <div class="card-body">
                    <div class="card p-4">
                        <p id="soal"></p>
                        <ol class="mt-4" type="a">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                    value="a">
                                <label class="form-check-label" for="exampleRadios2" id="pilihan-1"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                    value="b">
                                <label class="form-check-label" for="exampleRadios3" id="pilihan-2"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4"
                                    value="c">
                                <label class="form-check-label" for="exampleRadios4" id="pilihan-3"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5"
                                    value="d">
                                <label class="form-check-label" for="exampleRadios5" id="pilihan-4"></label>
                            </div>
                        </ol>
                    </div>
                </div>

            </div>
            <div class="row">
                {{-- Navigasi Next dan Prev --}}
                <div class="col-6">
                    <input class="btn btn-primary mt-6" type="submit" name="prev" value="Sebelumnya" id="prev"
                        onclick="prev()">
                </div>
                <div class="col-6 text-end">
                    <input class="btn btn-primary mt-6" type="submit" name="next" value="Selanjutnya" id="next"
                        onclick="next()">
                </div>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="card shadow">
                <div class="card-header">
                    Daftar Soal
                </div>
                <div class="card-header">
                    <table class="table table-sm">
                        <tr class="text-center">
                            <td class="soal btn list_soal" style="background: whitesmoke" name='1'>1</td>
                            <td class="soal btn list_soal" style="background: whitesmoke">2</td>
                            <td class="soal btn list_soal" style="background: whitesmoke">3</td>
                            <td class="soal btn list_soal" style="background: whitesmoke">4</td>
                            <td class="soal btn list_soal" style="background: whitesmoke">5</td>
                        </tr>
                    </table>
                </div>
                <div class="card-body text-sm">
                    <p class="m-0 card-text">Hijau = Sudah dijawab</p>
                    <p class="m-0 card-text">Putih = Belum dijawab</p>
                </div>
            </div>
            <div class="card shadow">
                <div class="row">
                    <div class="col text-center">
                        <button class="btn btn-success m-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Selesai</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Selesai</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                        onclick="selesai()">Selesai</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="particle-container">
    <div class="mt-3" id="hasil" style="display: none">
        <div class="row">
            <div class="col text-center">
                <div class="card">
                    <div class="card-header">
                        HASIL
                    </div>
                    <div class="card-body">
                        <p class="text-center"><b>Benar : </b><span id="benar"></span></p>
                        <p class="text-center"><b>Salah : </b><span id="salah"></span></p>
                        <p class="text-center"><b>Skor : </b><span id="skor"></span></p>
                        <a href="{{route('info')}}"><button class="btn btn-primary">Kembali</button></a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




{{-- Script Interaktiftas soal --}}

<script>
    // Membuat tampilan penuh
    document.getElementById('leftCol').hidden = true;
    document.getElementById('navbarHead').hidden = true;
    document.getElementById('content-wrapper').classList.remove('content-wrapper')

    // Countdown Timer
    const menit = document.getElementById('menit');
    const detik = document.getElementById('detik');

    function startCountdown(duration) {
        let timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = Math.floor(timer / 60);
            seconds = timer % 60;

            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            menit.innerHTML = minutes;
            detik.innerHTML = seconds;

            // console.log(timer)
            // console.log(duration)

            if (--timer < 0) {
                timer = duration;
                alert("Waktu habis!"); // Menampilkan pesan pop-up
                window.location.href = "info"; // Ganti dengan URL halaman tujuan
            }
        }, 1000);
    }

    window.onload = function () {
        const thirtyMinutes = 60 * 30;
        startCountdown(thirtyMinutes);
    };

    // Mengambil kumpulan soal
    //console.log($soal);
    const $soal_soal = document.getElementById('kumpulan-soal');
    // console.log('Hello World');

    // Mengubah data JSON dari HTML ke JSON Javascript, perlu dua kali parse
    const $data_soal = JSON.parse(JSON.parse($soal_soal.innerHTML));

    // Cek isi data Soal di Console Log
    // console.log($data_soal)
    // console.log($data_soal[0]['pilihan'][0]['teks'])

    // Menampilkan soal pada halaman
    const $soal = document.getElementById('soal');
    const $pilihan_1 = document.getElementById('pilihan-1');
    const $pilihan_2 = document.getElementById('pilihan-2');
    const $pilihan_3 = document.getElementById('pilihan-3');
    const $pilihan_4 = document.getElementById('pilihan-4');
    var $soal_sekarang = 0;

    // Menghapus semua soal dan jawaban
    function hapus_soal() {
        $soal.innerHTML = ''
        $pilihan_1.innerHTML = ''
        $pilihan_2.innerHTML = ''
        $pilihan_3.innerHTML = ''
        $pilihan_4.innerHTML = ''
    }

    // Menampikan nomor soal
    const no_soal = document.getElementById('no-soal');
    function nomor_soal($no) {
        no_soal.innerHTML = $no;
    }
    nomor_soal($soal_sekarang + 1);

    // Uncheck
    const $pilgan = document.getElementsByClassName('form-check-input');
    // console.log($pilgan);
    function uncheck() {
        for (let pilihan = 0; pilihan < $pilgan.length; pilihan++) {
            $pilgan[pilihan].checked = false;
        }
    }

    function isi_soal($nomor) {
        $soal.innerHTML = $data_soal[$nomor]['pertanyaan']
        $pilihan_1.innerHTML = $data_soal[$nomor]['pilihan'][0]['teks']
        $pilihan_2.innerHTML = $data_soal[$nomor]['pilihan'][1]['teks']
        $pilihan_3.innerHTML = $data_soal[$nomor]['pilihan'][2]['teks']
        $pilihan_4.innerHTML = $data_soal[$nomor]['pilihan'][3]['teks']
    }

    // Update list soal
    // let nomor_soal_di_list = document.getElementsByClassName('list_soal')
    // nomor_soal_di_list[0].style.background = 'green';
    // nomor_soal_di_list[0].style.text = 'green';
    // console.log(nomor_soal_di_list[0].innerHTML)


    isi_soal($soal_sekarang)

    // Matikan Tombol
    function nav_tombol() {
        // console.log($soal_sekarang)
        if ($soal_sekarang == 4) {
            document.getElementById('next').disabled = true;
            document.getElementById('prev').disabled = false;
        } else if ($soal_sekarang == 0) {
            document.getElementById('prev').disabled = true;
            document.getElementById('next').disabled = false;
        } else {
            document.getElementById('prev').disabled = false;
            document.getElementById('next').disabled = false;
        }
    }

    nav_tombol()




    // Navigasi
    function next() {
        console.log('Next')
        $soal_sekarang++;
        jawaban_check()
        hapus_soal()
        isi_soal($soal_sekarang)
        nav_tombol()
        nomor_soal($soal_sekarang + 1);


    }
    function prev() {
        console.log('Prev')

        $soal_sekarang--;
        jawaban_check();
        hapus_soal()
        isi_soal($soal_sekarang)
        nav_tombol()
        nomor_soal($soal_sekarang + 1);
    }


    // Bank Soal
    var terjawab = 0;
    const kunci_jawaban = ['a', 'b', 'b', 'd', 'a'];
    let jawaban_mhs = { 0: null, 1: null, 2: null, 3: null, 4: null };
    function simpan_jawaban() {
        if (jawaban_mhs[$soal_sekarang] == null) {
            terjawab += 1;
            progressBar()
        }
        for (let k = 0; k < 4; k++) {
            if ($pilgan[k].checked) {
                jawaban_mhs[$soal_sekarang] = $pilgan[k].value
            }
        }
        console.log(jawaban_mhs);
        list_soal[$soal_sekarang].style.background = 'green'
        list_soal[$soal_sekarang].style.color = 'white'

    }


    // Cek soal yang telah terjawab
    function jawaban_check() {
        console.log('Soal Sekarang => ', $soal_sekarang)
        if (jawaban_mhs[$soal_sekarang] == null) {
            console.log('Soal ini belum dijawab')
            uncheck()
        } else {
            uncheck()
            for (let pil = 0; pil < 4; pil++) { // Masuk ke pilgan
                if ($pilgan[pil].value == jawaban_mhs[$soal_sekarang]) {
                    $pilgan[pil].checked = true;
                }
            }
        }
    }




    // Check OnClick, langsung simpan jawaban
    const radio = document.querySelectorAll('input[name="exampleRadios"]');

    radio.forEach(radio => {
        radio.addEventListener('click', simpan_jawaban)
    })

    // Navigasi daftar soal
    function go_list(event) {
        console.log('Ditekan')
        console.log(event.currentTarget.innerHTML)
        $soal_sekarang = event.currentTarget.innerHTML - 1
        hapus_soal()
        isi_soal($soal_sekarang)
        nav_tombol()
        nomor_soal($soal_sekarang + 1);
        jawaban_check()
    }
    const list_soal = document.querySelectorAll('.list_soal');
    console.log(list_soal)
    list_soal.forEach(list_soal => {
        list_soal.addEventListener('click', go_list)
    })

    // ProgressBar
    let bar = document.getElementById('bar')
    console.log(bar)
    function progressBar() {
        console.log(terjawab)
        let persen = terjawab * 20;
        bar.style.width = `${persen}%`;
        console.log(bar)
    }

    // Selesai
    const lamanLatihan = document.getElementById('halaman-latihan');
    const hasil = document.getElementById('hasil');
    const show_skor = document.getElementById('skor');
    const jawaban_benar = document.getElementById('benar');
    const jawaban_salah = document.getElementById('salah');
    let benar = 0;
    let salah = 0;

    function periksaJawaban() {
    let benar = 0;
    let salah = 0;
    for (let m = 0; m < 5; m++) {
        console.log(kunci_jawaban[m], jawaban_mhs[m]);
        if (kunci_jawaban[m] == jawaban_mhs[m]) {
            benar += 1;
        } else {
            salah += 1;
        }
    }
    show_skor.innerHTML = benar * 20;
    jawaban_benar.innerHTML = benar;
    jawaban_salah.innerHTML = salah;

    return benar * 20; // Return the score as nilai_akhir
}

    // Sound selesai mengerjakan soal
    const victory = new Audio("{{asset('sound/victory.mp3')}}")

    function selesai() {
    triggerParticles();
    victory.play();
    const nilaiAkhir = periksaJawaban(); // Ambil nilai akhir dari fungsi periksaJawaban
    console.log('Sudah selesai');
    console.log(lamanLatihan);
    lamanLatihan.innerHTML = '';
    hasil.style.display = 'block';
    const email = '{{ auth()->user()->email }}'; // Assuming you have the user's email available

    // AJAX request to save nilaiAkhir and email to the database
    fetch('/evaluasi', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            email: email,
            nilai_akhir: nilaiAkhir
        })
    }).then(response => {
        if (response.ok) {
            console.log('Nilai berhasil disimpan');
        } else {
            console.error('Gagal menyimpan nilai');
        }
    }).catch(error => {
        console.error('Terjadi kesalahan:', error);
    });
}

    // Partikel
    function createParticle() {
        const particle = document.createElement('div');
        particle.classList.add('particle');

        // Set posisi awal partikel secara acak di atas layar
        particle.style.left = Math.random() * 100 + 'vw';
        particle.style.top = -10 + 'px'; // Mulai sedikit di luar layar bagian atas

        // Set ukuran dan kecepatan jatuh secara acak
        const size = Math.random() * 20 + 5; // Ukuran antara 5px dan 25px
        particle.style.width = size + 'px';
        particle.style.height = size + 'px';

        const duration = Math.random() * 2 + 3; // Durasi animasi antara 3s dan 5s
        particle.style.animationDuration = duration + 's';

        document.getElementById('particle-container').appendChild(particle);

        // Hapus partikel setelah animasi selesai
        setTimeout(() => {
            particle.remove();
        }, duration * 1000);
    }

    function triggerParticles() {
        for (let i = 0; i < 100; i++) { // Jumlah partikel yang dihasilkan
            setTimeout(createParticle, i * 100); // Mengatur jeda antar partikel
        }
    }

    // Panggil fungsi ini setelah pengguna menyelesaikan kuis







</script>

@endsection