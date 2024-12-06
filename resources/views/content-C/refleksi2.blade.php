@extends('layouts.main')

@section('container-content')

<h2>Refleksi C. 2</h2>
<p>
    Setelah mempelajari materi ini, bagaimana pemahaman kalian terhadap materi? Isilah penilaian diri ini dengan sejujur-jujurnya dan sebenar-benarnya sesuai dengan perasaan kalian ketika mengerjakan suplemen bahan materi ini! Bubuhkanlah tanda centang (√) pada salah satu gambar yang dapat mewakili perasaan kalian setelah mempelajari materi ini!
</p>
<div class="d-flex justify-content-center align-items-center mb-3">
    <table>
        <tr>
            <td class="p-2"><i class="fa-solid fa-face-smile fs-1 icon"></i></td>
            <td class="p-2"><i class="fa-solid fa-face-grin-beam-sweat fs-1 icon"></i></td>
            <td class="p-2"><i class="fa-solid fa-face-laugh-beam fs-1 icon"></i></td>
            <td class="p-2"><i class="fa-solid fa-face-sad-cry fs-1 icon"></i></td>
            <td class="p-2"><i class="fa-solid fa-face-dizzy fs-1 icon"></i></td>
        </tr>
        <tr>
            <td class="text-center"><input class="form-check-input" type="radio" value="refleksi1-1" name="refleksi1"></td>
            <td class="text-center"><input class="form-check-input" type="radio" value="refleksi1-2" name="refleksi1"></td>
            <td class="text-center"><input class="form-check-input" type="radio" value="refleksi1-3" name="refleksi1"></td>
            <td class="text-center"><input class="form-check-input" type="radio" value="refleksi1-4" name="refleksi1"></td>
            <td class="text-center"><input class="form-check-input" type="radio" value="refleksi1-5" name="refleksi1"></td>
        </tr>
    </table>
</div>

<script>
    const radios = document.querySelectorAll('input[name="refleksi1"]');
    const icons = document.querySelectorAll('.icon');


    radios.forEach((radio, index) => {
      radio.addEventListener('change', () => {
        // Hapus class text-primary dari semua ikon
        icons.forEach(icon => icon.classList.remove('text-primary'));
        
        // Tambahkan class text-primary ke ikon yang sesuai
        if (radio.checked) {
          icons[index].classList.add('text-primary');
        }
      });
    });
</script>

<form method="post" action="{{ route('simpanRefleksiKesejarahan') }}">
    @csrf

    <p><b>Jawablah pertanyaan berikut!</b></p>
    <div class="row mt-3">
        <ol>
            <li class="mt-3">
                <label for="sudah_dipelajari" class="fw-semibold">Apa yang sudah kalian pelajari?</label> <br>
                <textarea class="form-control w-100 mt-2" name="sudah_dipelajari" id="sudah_dipelajari"
                    rows="5"></textarea>
            </li>
            <li class="mt-3">
                <label for="dikuasai" class="fw-semibold">Apa yang kalian kuasai dari materi ini?</label> <br>
                <textarea class="form-control w-100 mt-2"  name="dikuasai" id="dikuasai"
                    rows="5"></textarea>
            </li>
            <li class="mt-3">
                <label for="belum_dikuasai" class="fw-semibold">Bagian apa yang belum kalian kuasai?</label> <br>
                <textarea class="form-control w-100 mt-2"  name="belum_dikuasai" id="belum_dikuasai"
                    rows="5"></textarea>
            </li>
            <li class="mt-3">
                <label for="upaya_menguasai" class="fw-semibold">Apa upaya kalian untuk menguasai yang belum kalian
                    kuasai?</label>
                <br>
                <textarea class="form-control w-100 mt-2" name="upaya_menguasai" id="upaya_menguasai"
                    rows="5"></textarea>
            </li>
        </ol>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Simpan Jawaban</button>
        </div>
    </div>
</form>

@endsection