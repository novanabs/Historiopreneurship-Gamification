@extends('layouts.main')

@section('container-content')

<h2>Praktik Lapangan 2</h2>
<p class="text-lg">AKTIVITAS 6</p>
<p class="text-sm">2 JP x @ 50 menit = 100 menit</p>
<p>
    Pada pertemuan kali ini, saatnya kalian menjual produk dan jasa terkait kewirausahaan kesejarahan yang telah kalian rancang kepada lingkup yang lebih luas, seperti masyarakat umum, teman di luar kelas/fakultas, teman di luar universitas, pengguna sosial media, dan lainlain. Tulislah produk dan yang berhasil kalian jual beserta jumlahnya.
</p>

<!-- Form Upload Praktik Lapangan 2 -->
<form method="post" action="{{ route('uploadFileKesejarahan') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="category" value="kegiatan pembelajaran 3">
    <div class="mb-3">
        <label for="formFile1" class="form-label fw-semibold">Silahkan kumpulkan tugas untuk Praktik Lapangan 2!</label>
        <input class="form-control" type="file" id="formFile1" name="file">
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>

<h4 class="text-center my-3">Lampiran: <br> Tabel jumlah produk dan jasa yang terjual</h4>
<table class="shadow table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama Konsumen</th>
        <th>Jumlah</th>
        <th>Keterengan</th>
    </thead>
    <tr>
        <td>1.</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2.</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3.</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>dst.</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>

@endsection