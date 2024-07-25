@extends('layouts.main')

@section('container')



<?php
    
    $_SESSION['data_soal'] = json_decode($soal->data_soal, true);
    // dd($_SESSION['data_soal']);
    

    $data_soal = $_SESSION['data_soal'];
    $data_dari_json = json_encode($soal->data_soal);
    $soal_sekarang = $_SESSION['soal_sekarang'];
    $jawaban = $_SESSION['jawaban'];
    $nilai = $_SESSION['nilai'];

    // Navigasi Soal
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // if(isset($_POST['jawaban'])){
        //     $jawaban[$soal_sekarang] = $_POST['jawaban'];
        // }
        

        // Navigasi Soal
        if(isset($_POST['next'])){           
             $soal_sekarang+=1;
        } elseif(isset($_POST['prev'])) {
            dd($_SERVER['REQUEST_METHOD']);
             $soal_sekarang-=1;
        } elseif(isset($_POST['submit'])){
            dd();
        }
        
        
    }
    $soal = $data_soal[$soal_sekarang];
    
?>

<p id="kumpulan-soal" hidden>{{$data_dari_json}}</p>

<div class="mt-3">
    <h1>Latihan</h1>

    <div class="progress rounded" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: {{'1'}}%"></div>
      </div>
    <div class="row">
        
        <div class="col-8 p-2">
            <div class="card shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <b>Soal No. --</b>
                        </div>
                        <div class="col text-end">
                            <b><i class="bi bi-clock text-end"></i> 00:00:00</b>
                        </div>
                    </div>
                </div>
                {{-- Menampilkan Soal --}}
                
                <div class="card-body"> 
                    <p id="soal"></p>
                    <ol class="mt-4" type="a">
                        <li id="pilihan-1"></li>
                        <li id="pilihan-2"></li>
                        <li id="pilihan-3"></li>
                        <li id="pilihan-4"></li>
                    </ol>
                </div>
               
            </div>
            <div class="row">
                {{-- Navigasi Next dan Prev --}}
                <div class="col-4">
                    <input class="btn btn-primary mt-3" type="submit" name="prev" value="Sebelumnya" id="prev" onclick="prev()">
                </div>
                <div class="col-4 text-center">
                    <button class="btn btn-warning mt-3">Ragu</button> 
                </div>
                <div class="col-4 text-end">
                    <input class="btn btn-primary mt-3" type="submit" name="next" value="Selanjutnya" id="next" onclick="next()">
                </div>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="card shadow">
                <div class="card-header">
                    Soal
                </div>
                <div class="card-header">
                    <table class="table table-sm">
                        <tr class="text-center">
                            <td class="soal btn bg-secondary-subtle">1</td>
                            <td class="soal btn bg-secondary-subtle">2</td>
                            <td class="soal btn bg-secondary-subtle">3</td>
                            <td class="soal btn bg-secondary-subtle">4</td>
                            <td class="soal btn bg-secondary-subtle">5</td>
                        </tr>
                    </table>
                </div>
                <div class="card-body text-sm">
                    <p class="m-0 card-text">Hijau = Sudah dijawab</p>
                    <p class="m-0 card-text">Orange = Ragu-ragu</p>
                    <p class="m-0 card-text">Abu-abu = Belum dijawab</p>
                </div>
            </div>
            <div class="card shadow">
                <div class="row">
                    <div class="col text-center">
                        <button class="btn btn-danger m-2">Selesai</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

{{-- Script Interaktiftas soal --}}

<script>
    // Mengambil kumpulan soal
    //console.log($soal);
    const $soal_soal = document.getElementById('kumpulan-soal');
    console.log('Hello World');
    
    // Mengubah data JSON dari HTML ke JSON Javascript, perlu dua kali parse
    const $data_soal = JSON.parse(JSON.parse($soal_soal.innerHTML));

    // Cek isi data Soal di Console Log
    console.log($data_soal)
    console.log($data_soal[0]['pilihan'][0]['teks'])

    // Menampilkan soal pada halaman
    const $soal = document.getElementById('soal');
    const $pilihan_1 = document.getElementById('pilihan-1');
    const $pilihan_2 = document.getElementById('pilihan-2');
    const $pilihan_3 = document.getElementById('pilihan-3');
    const $pilihan_4 = document.getElementById('pilihan-4');
    var $soal_sekarang = 0;

    function hapus_soal(){
        $soal.innerHTML = ''
        $pilihan_1.innerHTML = ''
        $pilihan_2.innerHTML = ''
        $pilihan_3.innerHTML = ''
        $pilihan_4.innerHTML = ''
    }
    
    function isi_soal($nomor){
        $soal.innerHTML = $data_soal[$nomor]['pertanyaan']
        $pilihan_1.innerHTML = $data_soal[$nomor]['pilihan'][0]['teks']
        $pilihan_2.innerHTML = $data_soal[$nomor]['pilihan'][1]['teks']
        $pilihan_3.innerHTML = $data_soal[$nomor]['pilihan'][2]['teks']
        $pilihan_4.innerHTML = $data_soal[$nomor]['pilihan'][3]['teks']
    }

    isi_soal($soal_sekarang)

     // Matikan Tombol
     function nav_tombol(){
        console.log($soal_sekarang)
        if($soal_sekarang == 4){
            document.getElementById('next').disabled = true;
            document.getElementById('prev').disabled = false;
        }else if($soal_sekarang == 0){
            document.getElementById('prev').disabled = true;
            document.getElementById('next').disabled = false;
        }else{
            document.getElementById('prev').disabled = false;
            document.getElementById('next').disabled = false;
        }
    }

    nav_tombol()

    
    // Navigasi
    function next(){
        console.log('Next')
        $soal_sekarang++;
        hapus_soal()
        isi_soal($soal_sekarang)
        nav_tombol()
        
    }
    function prev(){
        console.log('Prev')
        $soal_sekarang--;
        hapus_soal()
        isi_soal($soal_sekarang)
        nav_tombol()
    }
    
   
    

</script>

@endsection