@extends('layouts.main')

@section('container')



<?php
    
    $_SESSION['data_soal'] = json_decode($soal->data_soal, true);
    // dd($_SESSION['data_soal']);
    

    $data_soal = $_SESSION['data_soal'];
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
                    <p>{{$soal_sekarang+1 . '.  ' . $soal['pertanyaan']}}</p>
                    <ol class="mt-4" type="a">
                        @foreach ($soal['pilihan'] as $pilihan)
                            <li>{{$pilihan['teks']}}</li>
                        @endforeach
                    </ol>
                </div>
               
            </div>
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                {{-- Navigasi Next dan Prev --}}
                <div class="col-4">
                    <input class="btn btn-primary mt-3" type="submit" name="prev" value="Sebelumnya" {{$soal_sekarang > 0 ? '' : 'disabled'}}>
                </div>
                <div class="col-4 text-center">
                    <button class="btn btn-warning mt-3">Ragu</button> 
                </div>
                <div class="col-4 text-end">
                    <input class="btn btn-primary mt-3" type="submit" name="next" value="Selanjutnya" {{$soal_sekarang < count($soal) ? '' : 'disabled'}}>
                </div>
            </div>
        </form>
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
    console.log($soal);
</script>

@endsection