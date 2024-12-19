@extends('layouts.main')

@section('container-content')

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<h2>ANALISA KELOMPOK</h2>
<p class="text-lg">AKTIVITAS EKSPLORASI MAHASISWA</p>
<p>
    Berdasarkan hasil identifikasi terkait objek kesejarahan yang ada di daerah kalian, petakanlah objek-objek kesejarahan tersebut.
    <br>Lakukanlah analisa secara individu!
</p>
<p class="border rounded p-2 bg-warning-subtle">
    Silahkan berselancar di dunia maya / lingkungan sekitar untuk melakuka analisis
</p>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <!-- Iframe dengan rasio responsif -->
            <div class="ratio ratio-16x9 shadow">
                <iframe 
                    src="https://www.youtube.com/embed/P4B-OnP8ISc?si=YBNeIwxF_qJmlo3E"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
    <h4 class="mt-4">Temukanlah 10 Objek Kesejarahan yang ada di daerah kalian.</h4>
    <form class="w-100" method="post" id="formIndividu" action="{{ route('simpanJawabanIndividu2') }}">
        @csrf
            @foreach (range(1, 10) as $i)
                <div class="row mt-3">
                    <div class="col">
                        <label for="objek{{ $i }}" data-value="{{ $i }}" class="form-label fw-bold mt-2">Objek {{ $i }}</label>
                        <br>

                        @php
                            // Mencari jawaban berdasarkan no_objek
                            $jawaban = $jawabanIndividuII->where('no_objek', $i)->first();
                            // Mengambil nilai jawaban atau string kosong jika tidak ada
                            $jawabanValue = $jawaban ? $jawaban->jawaban : '';
                            // Menentukan apakah input harus dinonaktifkan
                            $isDisabled = !empty($jawabanValue);
                        @endphp

                        <input name="objek{{ $i }}" id="objek{{ $i }}"
                            rows="5" class="form-control" 
                            value="{{ old('objek' . $i, $jawabanValue) }}" 
                            {{ $isDisabled ? 'disabled' : '' }}>

                    </div>
                </div>
            @endforeach

        <div class="mt-4">
            <button type="submit" class="me-2 btn btn-primary" {{ $isDisabled ? 'disabled' : '' }}>SIMPAN JAWABAN</button>
        </div>
</div>

@endsection