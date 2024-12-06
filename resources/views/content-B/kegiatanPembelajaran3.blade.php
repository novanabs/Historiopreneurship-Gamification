@extends('layouts.main')

@section('container-content')

<h2>Kegiatan Pembelajaran 3</h2>
<p class="text-sm">4 JP x @50 menit = 200 menit </p>
<p><b>CPMK:</b></p>
<ol>
    <li>
        Mahasiswa mampu menyusun laporan terkait rambu-rambu wisata kesejarahan berbasis kewirausahaan berdasarkan hasil observasi lapangan.
    </li>
</ol>
<p class="text-lg">LAPORAN KEGIATAN</p>
<p>AKTIVITAS UNJUK KERJA</p>
<p>
    Berdasarkan hasil penilaian kelayakan objek sejarah yang dipilih dari setiap kelompok, buatlah laporan kegiatan tersebut dengan memuat “object pattern and feasibility”, selanjutnya diskusikan di kelas.
</p>

<!-- Form Upload Kegiatan Pembelajaran 3 -->
<form method="post" action="{{ route('uploadFileKesejarahan') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="category" value="kegiatan pembelajaran 3">
    <div class="mb-3">
        <label for="formFile1" class="form-label fw-semibold">Silahkan kumpulkan tugas untuk Kegiatan Pembelajaran 3!</label>
        <input class="form-control" type="file" id="formFile1" name="file">
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>

@endsection