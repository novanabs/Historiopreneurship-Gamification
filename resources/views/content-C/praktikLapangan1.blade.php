@extends('layouts.main')

@section('container-content')

<h2>Praktik Lapangan 1</h2>
<p class="text-lg">AKTIVITAS 5</p>
<p class="text-sm">2 JP x @ 50 menit = 100 menit</p>
<p>
    Produk dan jasa yang telah kalian rancang, akan disimulasikan pada pertemuan ini. Simulasikanlah dengan teman-teman di kelas kalian terlebih dahulu sebelum dipraktikkan ke lingkup yang lebih luas. Tulislah saran dari teman-teman di kelas terkait Produk dan jasa yang sudah kalian jual kepada mereka.
</p>

<!-- Form Upload Praktik Lapangan 1 -->
<form method="post" action="{{ route('uploadFileKesejarahan') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="category" value="kegiatan pembelajaran 3">
    <div class="mb-3">
        <label for="formFile1" class="form-label fw-semibold">Silahkan kumpulkan tugas untuk Praktik Lapangan 1!</label>
        <input class="form-control" type="file" id="formFile1" name="file">
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>

@endsection