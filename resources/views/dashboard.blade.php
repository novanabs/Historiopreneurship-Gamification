
@extends('layouts.main')

@section('container')

    
    <div class="mt-3">
        <div class="row">
            <div class="col">
                <h1>Selamat Datang, {{ Auth::user()->nama_lengkap }}</h1>
                <h3>Ini adalah halaman Dashboard</h3>
            </div>
        </div>
    </div>
@endsection