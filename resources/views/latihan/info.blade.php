@extends('layouts.main')

@section('container')

<div class="mt-3">
    <h1>Informasi --</h1>
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header">
                    Informasi Latihan / Kuis / Evaluasi
                </div>
                <div class="card-body">
                    <p class="text-center"><b>BAB : </b>Kesejarahan</p>
                    <p class="text-center"><b>Jumlah Soal : </b>5</p>
                    <p class="text-center"><b>Durasi Pengerjaan : </b>30 Menit</p>
                    <p class="text-sm text-center">Waktu akan dimulai saat anda menekan tombol mulai</p>
                    <a href="{{route('latihan')}}"><button class="btn btn-primary">Mulai</button></a>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection