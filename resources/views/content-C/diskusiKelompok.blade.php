@extends('layouts.main')

@section('container-content')

<h2>Diskusi Kelompok</h2>
<p class="text-lg">AKTIVITAS 3</p>
<p class="text-sm">2 JP x @ 50 menit = 100 menit</p>
<p class="mt-2">
    Berdasarkan materi yang disampaikan oleh pakar, diskusikanlah materi tersebut dengan menguraikan perspektif kalian dalam bentuk ringkasan dan peta konsep terkait pemasaran kewirausahaan kesejarahan!
</p>
<p>
    <b>RINGKASAN DAN PETA KONSEP PEMASARAN KEWIRAUSAHAAN KESEJARAHAN</b>
</p>
<p>Anggota Kelompok</p>

{{-- Disini Backend --}}
<form action="">
    <label for="sudah_dipelajari" class="fw-semibold">Hasil analisa kelompok:</label> 
    <textarea class="form-control w-100 my-2" name="sudah_dipelajari" id="sudah_dipelajari" rows="5" placeholder="Tuliskan hasil analisa kelompok disini"></textarea>
    
</form>

<h3>Rubrik Hasil Analisa</h3>
<ol>
    <li>
        <b>KATEGORI 1</b><br>Jika hasil analisa mengambarkan jawaban yang tidak lengkap, tidak terstruktur dan tidak tepat sasaran 
    </li>
    <li class="mt-3">
        <b>KATEGORI 2</b><br>Jika hasil analisa mengambarkan jawaban yang cukup lengkap, cukup terstruktur dan cukup tepat sasaran 
    </li>
    <li class="mt-3">
        <b>KATEGORI 3</b><br>Jika hasil analisa mengambarkan jawaban yang lengkap, terstruktur dan tepat sasaran 
    </li>
    <li class="mt-3">
        <b>KATEGORI 4</b><br>Jika hasil analisa mengambarkan jawaban yang sangat lengkap, sangat terstruktur dan sangat tepat sasaran 
    </li>
</ol>

@endsection