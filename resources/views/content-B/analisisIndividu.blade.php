@extends('layouts.main')

@section('container-content')

<h2>ANALISA INDIVIDU</h2>
<p>
    Berdasarkan hasil identifikasi dari setiap kelompok, analisa dan asesmen lah hasil pemetaan tersebut dengan melengkapi kolom di bawah ini. Selanjutnya, diskusikan di kelas.
</p>
<p class="text-lg">LENGKAPILAH KOLOM DI BAWAH INI!</p>

<form method="post" action="{{ route('simpanAnalisisIndividu') }}">
    @csrf
    <div class="row">
        <div class="col">
            <div class="row mt-3">
                <div class="col">
                    <label for="objekWisata" class="fw-bold">Objek Wisata</label><br>
                    <textarea name="objekWisata" id="objekWisata" class="form-control w-100 mt-2"
                        rows="5">{{ old('objekWisata', $jawabanIndividu['wisata'] ?? '') }}</textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="objekKesejarahan" class="fw-bold">Objek Kesejarahan</label><br>
                    <textarea name="objekKesejarahan" id="objekKesejarahan" class="form-control w-100 mt-2"
                        rows="5">{{ old('objekKesejarahan', $jawabanIndividu['kesejarahan'] ?? '') }}</textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="urgensiObjekKesejarahan" class="fw-bold">Urgensi Objek Kesejarahan</label><br>
                    <textarea name="urgensiObjekKesejarahan" id="urgensiObjekKesejarahan" class="form-control w-100 mt-2"
                        rows="5">{{ old('urgensiObjekKesejarahan', $jawabanIndividu['urgensi objek kesejarahan'] ?? '') }}</textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="urgensiKesejarahan" class="fw-bold">Urgensi Kesejarahan</label><br>
                    <textarea name="urgensiKesejarahan" id="urgensiKesejarahan" class="form-control w-100 mt-2"
                        rows="5">{{ old('urgensiKesejarahan', $jawabanIndividu['urgensi kesejarahan'] ?? '') }}</textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Simpan Jawaban</button>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="mt-4">
    <h4 class="text-center  mb-3">INDIKATOR PENILAIAN KELAYAKAN OBJEK KESEJARAHAN </h4>
    <table class="shadow table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Aspek</th>
                <th>Bobot</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tr>
            <td>1.</td>
            <td>Daya Tarik</td>
            <td>6</td>
            <td>Daya tarik merupakan faktor utama
                alasan seseorang melakukan
                perjalanan wisata sejarah.
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Aksesibilitas</td>
            <td>5</td>
            <td>Aksesbilitas merupakan faktor penting
                yang mendukung wisatawan dapat
                melakukan kegiatan wisata sejarah.
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Sarana Prasarana</td>
            <td>3</td>
            <td>Sarana dan prasarana bersifat
                sebagai penunjang dalam kegiatan
                wisata sejarah.
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Partisipasi Masyarakat</td>
            <td>6</td>
            <td>Partisipasi masyarakat adalah
                keterlibatan sukarela oleh masyarakat
                dalam pembangunan objek sejarah di
                lingkungan mereka sendiri.</td>
        </tr>
    </table>
</div>

<div class="mt-4">
    <h4 class="text-center mt-4 mb-3">LAMPIRAN <br> FORM SYARAT KELAYAKAN OBJEK KESEJARAHAN</h4>
    <table class="shadow table table-bordered  table-responsive-md">
        <thead>
            <tr class="text-center">
                <th rowspan="2">NO</th>
                <th rowspan="2">ASPEK</th>
                <th rowspan="2">Sub Aspek</th>
                <th colspan="5">Skor</th>
                <th rowspan="2">Alasan</th>
            </tr>
            <tr class="text-center">
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
            </tr>
        </thead>
        <tr>
            <td rowspan="4">1.</td>
            <td rowspan="4">Daya Tarik</td>
            <td>1. Memiliki keunikan atau ciri khas sejarah lokal</td>
            <td><input type="radio" class="form-check-input" name="nomor1-1" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-1" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-1" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-1" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-1" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan1-1" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>2. Objek sejarah memiliki lokasi yang bersih</td>
            <td><input type="radio" class="form-check-input" name="nomor1-2" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-2" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-2" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-2" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-2" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan1-2" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>3. Kawasan objek sejarah terjamin keamanannya</td>
            <td><input type="radio" class="form-check-input" name="nomor1-3" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-3" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-3" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-3" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-3" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan1-3" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>4. Keserasian bangunan objek dengan lingkungan</td>
            <td><input type="radio" class="form-check-input" name="nomor1-4" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-4" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-4" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-4" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor1-4" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan1-4" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td rowspan="3">2.</td>
            <td rowspan="3">Aksesbilitas</td>
            <td>1. Kondisi jalan menuju objek sejarah terlampau mulus</td>
            <td><input type="radio" class="form-check-input" name="nomor2-1" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor2-1" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor2-1" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor2-1" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor2-1" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan2-1" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>2. Dekat dari pusat kota</td>
            <td><input type="radio" class="form-check-input" name="nomor2-2" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor2-2" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor2-2" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor2-2" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor2-2" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan2-2" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>3. Waktu tempuh dari pusat kota tidak terlalu lama/jauh</td>
            <td><input type="radio" class="form-check-input" name="nomor2-3" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor2-3" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor2-3" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor2-3" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor2-3" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan2-3" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td rowspan="4">3.</td>
            <td rowspan="4">Sarana Prasarana</td>
            <td>1. Memiliki fasilitas umum seperti toilet dan tempat wudhu</td>
            <td><input type="radio" class="form-check-input" name="nomor3-1" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-1" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-1" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-1" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-1" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan3-1" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>2. Memiliki <i>gif/merchandise store</i> di sekitar objek sejarah</td>
            <td><input type="radio" class="form-check-input" name="nomor3-2" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-2" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-2" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-2" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-2" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan3-2" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>3. Memiliki warung dan rumah makan di sekitar objek sejarah</td>
            <td><input type="radio" class="form-check-input" name="nomor3-3" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-3" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-3" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-3" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-3" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan3-3" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>4. Memiliki areal parkir yang cukup untuk wisatawan</td>
            <td><input type="radio" class="form-check-input" name="nomor3-4" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-4" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-4" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-4" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor3-4" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan3-4" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td rowspan="7">4.</td>
            <td rowspan="7">Partisipasi Masyarakat</td>
            <td>1. Objek kesejarahan dapat mensejahterakan tuan rumah atau masyarakat sekitar</td>
            <td><input type="radio" class="form-check-input" name="nomor4-1" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-1" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-1" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-1" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-1" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan4-1" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>2. Masyarakat sekitar menyambut kehadiran wisatawan</td>
            <td><input type="radio" class="form-check-input" name="nomor4-2" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-2" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-2" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-2" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-2" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan4-2" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>3. Masyarakat menyediakan fasilitas kenyamanan wisata</td>
            <td><input type="radio" class="form-check-input" name="nomor4-3" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-3" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-3" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-3" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-3" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan4-3" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>4. Masyarakat menyediakan pemandu wisata</td>
            <td><input type="radio" class="form-check-input" name="nomor4-4" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-4" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-4" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-4" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-4" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan4-4" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>5. Pelaku wisata berasal dari masyarak lokal</td>
            <td><input type="radio" class="form-check-input" name="nomor4-5" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-5" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-5" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-5" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-5" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan4-5" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>6. Terdapat penjual cindremata/oleh-oleh khas wisata setempat yang dibuat masyarakat lokal
            </td>
            <td><input type="radio" class="form-check-input" name="nomor4-6" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-6" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-6" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-6" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-6" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan4-6" class="form-control" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>7. Masyarakat turut serta dalam menjaga keamanan, kenyamanan, ketertiban, dan kebersihan
                daerah wisata
            </td>
            <td><input type="radio" class="form-check-input" name="nomor4-7" id="no2-1" value="2-1"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-7" id="no2-2" value="2-2"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-7" id="no2-3" value="2-3"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-7" id="no2-4" value="2-4"></td>
            <td><input type="radio" class="form-check-input" name="nomor4-7" id="no2-5" value="2-5"></td>
            <td><textarea name="alasan4-7" class="form-control" rows="3"></textarea></td>
        </tr>
    </table>
</div>

@endsection