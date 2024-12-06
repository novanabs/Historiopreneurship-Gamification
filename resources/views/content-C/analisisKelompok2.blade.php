@extends('layouts.main')

@section('container-content')

<h2>Analisis Kelompok 2</h2>
<p class="text-lg">AKTIVITAS 2</p>
<p class="text-sm">1 JP x @ 50 menit = 50 menit</p>
<p class="mt-2 text-lg">LAKUKAN ANALISA TERHADAP PERMASALAHAN BERIKUT!</p>
<p>Anggota Kelompok</p>



<ul class="list-unstyled">
    <li class="mt-3">
        <label for="sudah_dipelajari" class="fw-semibold">Jenis-jenis teknologi yang berpengaruh terhadap dunia pemasaran produkproduk yang berkaitan dengan kewirausahaan kesejarahan:</label> <br>
        <textarea class="form-control w-100 mt-2" name="sudah_dipelajari" id="sudah_dipelajari"
            rows="5"></textarea>
    </li>
    <li class="mt-3">
        <label for="sudah_dipelajari" class="fw-semibold">Bagaimana pengaruh teknologi tersebut terhadap proses pemasaran kewirausahaan kesejarahan:</label> <br>
        <textarea class="form-control w-100 mt-2" name="sudah_dipelajari" id="sudah_dipelajari"
            rows="5"></textarea>
    </li>
    <li class="mt-3">
        <label for="sudah_dipelajari" class="fw-semibold">Kelebihan dan kekurangan penggunaan teknologi dalam proses pemasaran kewirausahaan kesejarahan:</label> <br>
        <textarea class="form-control w-100 mt-2" name="sudah_dipelajari" id="sudah_dipelajari"
            rows="5"></textarea>
    </li>
    <li class="mt-3">
        <label for="sudah_dipelajari" class="fw-semibold">Analisislah kondisi proses pemasaran sebelum dan sesudah ditemukannya teknologi khususnya platform pemasaran digital:</label> <br>
        <textarea class="form-control w-100 mt-2" name="sudah_dipelajari" id="sudah_dipelajari"
            rows="5"></textarea>
    </li>
</ul>

<button type="submit" class="btn btn-primary">Simpan Jawaban</button>

@endsection