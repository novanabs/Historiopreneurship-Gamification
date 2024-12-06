@extends('layouts.main')

@section('container-content')

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
    <form class="w-100">
        <div class="mb-3">
            <label for="objek-1" class="form-label fw-bold mt-2">Objek 1</label>
            <input type="text" name="objek-1" placeholder="Objek 1" class="form-control">
        </div>
        <div class="mb-3">
            <label for="objek-2" class="form-label fw-bold mt-2">Objek 2</label>
            <input type="text" name="objek-2" placeholder="Objek 2" class="form-control">
        </div>
        <div class="mb-3">
            <label for="objek-3" class="form-label fw-bold mt-2">Objek 3</label>
            <input type="text" name="objek-3" placeholder="Objek 3" class="form-control">
        </div>
        <div class="mb-3">
            <label for="objek-4" class="form-label fw-bold mt-2">Objek 4</label>
            <input type="text" name="objek-4" placeholder="Objek 4" class="form-control">
        </div>
        <div class="mb-3">
            <label for="objek-5" class="form-label fw-bold mt-2">Objek 5</label>
            <input type="text" name="objek-5" placeholder="Objek 5" class="form-control">
        </div>
        <div class="mb-3">
            <label for="objek-6" class="form-label fw-bold mt-2">Objek 6</label>
            <input type="text" name="objek-6" placeholder="Objek 6" class="form-control">
        </div>
        <div class="mb-3">
            <label for="objek-7" class="form-label fw-bold mt-2">Objek 7</label>
            <input type="text" name="objek-7" placeholder="Objek 7" class="form-control">
        </div>
        <div class="mb-3">
            <label for="objek-8" class="form-label fw-bold mt-2">Objek 8</label>
            <input type="text" name="objek-8" placeholder="Objek 8" class="form-control">
        </div>
        <div class="mb-3">
            <label for="objek-9" class="form-label fw-bold mt-2">Objek 9</label>
            <input type="text" name="objek-9" placeholder="Objek 9" class="form-control">
        </div>
        <div class="mb-3">
            <label for="objek-10" class="form-label fw-bold mt-2">Objek 10</label>
            <input type="text" name="objek-10" placeholder="Objek 10" class="form-control">
        </div>
        <div class="mt-4">
            <button type="submit" class="me-2 btn btn-primary">SIMPAN JAWABAN</button>
        </div>
</div>

@endsection