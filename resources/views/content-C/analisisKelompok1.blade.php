@extends('layouts.main')

@section('container-content')

<h2>Analisis Kelompok 1</h2>
<p class="text-lg">AKTIVITAS 1</p>
<p class="text-sm">1 JP x @ 50 menit = 50 menit</p>
<p>Anggota Kelompok</p>
<p class="mt-2 text-lg">
    DESKRIPSIKANLAH PERSPEKTIF KALIAN TERHADAP PERMASALAHAN BERIKUT!
</p>
<p>
    Perkembangan teknologi semakin hari semakin bertambah canggih. Dengan ditemukannya berbagai macam jenis software atau aplikasi serta pemrograman internet, membawa pengaruh yang sangat besar terhadap isu perdagangan dan pemasaran dari strategi offline ke startegi berbasis online. Pemasaran Online atau bisa disebut juga dengan Digital Marketing merupakan teknik pemasaran terkini dengan menggunakan internet sebagai sumber utamanya. Selain bisa menjangkau ke seluruh dunia, pemasaran online bisa dilakukan hanya di depan komputer dan tentunya memerlukan strategi-strategi terstentu untuk bisa menyukseskan proses pemasarannya.
</p>
<p>
    Strategi-startegi yang bisa dilakukan dalam pemasaran berbasis online dapat menggunakan berbagai macam software, aplikasi atau program, baik yang disedikan secara organik (gratis) maupun anorganik (berbayar). Saat ini tersedia berbagai macam platform aplikasi yang dapat digunakan sebagai media atau tools untuk meningkatkan strategi pemasaran, diantaranya SEO, SEM, Social media marketing (Facebook, Instagram, whatsapp, twitter, dan lain-lain), PPC, dan Afiliate marketing
</p>
<h4 class="text-center">
    PENGALAMAN BERBELANJA PADA SITUS e-COMMERCE
</h4>

<form action="">
    <ol class="list-unstyled">
        <li class="mt-3">
            <label for="sudah_dipelajari" class="fw-semibold">Pengalaman yang didapat:</label> <br>
            <textarea class="form-control w-100 mt-2" name="sudah_dipelajari" id="sudah_dipelajari"
                rows="5"></textarea>
        </li>
        <li class="mt-3">
            <label for="dikuasai" class="fw-semibold">Kelebihan berbelanja melalui situs <i>e-commerce:</i></label> <br>
            <textarea class="form-control w-100 mt-2"  name="dikuasai" id="dikuasai"
                rows="5"></textarea>
        </li>
        <li class="mt-3">
            <label for="belum_dikuasai" class="fw-semibold">Kekurangan belanja melalui situs <i>e-commerce:</i></label> <br>
            <textarea class="form-control w-100 mt-2"  name="belum_dikuasai" id="belum_dikuasai"
                rows="5"></textarea>
        </li>
    </ol>
    <button type="submit" class="btn btn-primary mt-3">Simpan Jawaban</button>
</form>

@endsection