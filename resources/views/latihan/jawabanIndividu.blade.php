@extends('layouts.main')

@section('container-content')
<div class="container">
    <h2>Jawaban Individu</h2>
    <h4 class="mb-4">Nama : {{$user->nama_lengkap}}</h4>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="kesejarahan-tab" data-bs-toggle="tab" data-bs-target="#kesejarahan"
                type="button" role="tab" aria-controls="kesejarahan" aria-selected="true">Kesejarahan</button>
        </li>
        <!-- Add a new tab for Analisis Kesejarahan II -->
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="kesejarahan-ii-tab" data-bs-toggle="tab" data-bs-target="#kesejarahan-ii"
                type="button" role="tab" aria-controls="kesejarahan-ii" aria-selected="false">Kesejarahan II</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="kewirausahaan-tab" data-bs-toggle="tab" data-bs-target="#kewirausahaan"
                type="button" role="tab" aria-controls="kewirausahaan" aria-selected="false">Kewirausahaan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="file-upload-tab" data-bs-toggle="tab" data-bs-target="#file-upload"
                type="button" role="tab" aria-controls="file-upload" aria-selected="false">File Upload</button>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">

        <!-- Tab Kesejarahan II -->
        <div class="tab-pane fade" id="kesejarahan-ii" role="tabpanel" aria-labelledby="kesejarahan-ii-tab">
            <h3 class="mt-3">Jawaban Kesejarahan II</h3>
            @if($jawabanIndividuII->isEmpty())
                <p>Tidak ada jawaban yang ditemukan untuk Kesejarahan II.</p>
            @else
                <table class="table text-center table-bordered">
                    <thead>
                        <tr>
                            <th>No Objek</th>
                            <th>Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jawabanIndividuII as $index => $jawaban)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $jawaban->jawaban }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col">
                        <div class="card text-center">
                            <h5 class="card-header">
                                Penilaian
                            </h5>
                            <div class="card-body">
                                <form action="{{ route('kirimJawabanIndividu', ['email' => $email]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="aspek" value="analisa_individu_kesejarahan_II">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Nilai</span>
                                        <input type="text" class="form-control" name="nilai_akhir"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <label for="feedbackIndividu">Feedback</label><br>
                                    <textarea name="data_jawaban_penilai" id="feedbackIndividu" rows="5"></textarea>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </form>
                            </div>
                            <div class="card-footer text-muted">
                                Semangat dalam menilai!
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <!-- Tab Kesejarahan -->
        <div class="tab-pane fade show active" id="kesejarahan" role="tabpanel" aria-labelledby="kesejarahan-tab">
            <h3 class="mt-3">Jawaban Kesejarahan</h3>
            @if($jawabanKesejarahanIndividu->isEmpty())
                <p>Tidak ada jawaban yang ditemukan untuk Kesejarahan.</p>
            @else
                <table class="table text-center table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Aspek</th>
                            <th>Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jawabanKesejarahanIndividu as $index => $jawaban)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $jawaban->aspek }}</td>
                                <td>{{ $jawaban->jawaban }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col">
                        <div class="card text-center">
                            <h5 class="card-header">
                                Penilaian
                            </h5>
                            <div class="card-body">
                                <form action="{{ route('kirimJawabanIndividu', ['email' => $email]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="aspek" value="analisa_individu_kesejarahan">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Nilai</span>
                                        <input type="text" class="form-control" name="nilai_akhir"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <label for="feedbackIndividu">Feedback</label><br>
                                    <textarea name="data_jawaban_penilai" id="feedbackIndividu" rows="5"></textarea>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </form>
                            </div>
                            <div class="card-footer text-muted">
                                Semangat dalam menilai !
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>



        <!-- Tab Kewirausahaan -->
        <div class="tab-pane fade" id="kewirausahaan" role="tabpanel" aria-labelledby="kewirausahaan-tab">
            <h3 class="mt-3">Jawaban Kewirausahaan</h3>
            @if($jawabanKewirausahaanPariwisataIndividu->isEmpty())
                <p>Tidak ada jawaban yang ditemukan untuk Kewirausahaan.</p>
            @else
                <table class="table text-center table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Aspek</th>
                            <th>Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jawabanKewirausahaanPariwisataIndividu as $index => $jawaban)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $jawaban->aspek }}</td>
                                <td>{{ $jawaban->jawaban }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col">
                        <div class="card text-center">
                            <h5 class="card-header">
                                Penilaian
                            </h5>
                            <div class="card-body">
                                <form action="{{ route('kirimJawabanIndividu', ['email' => $email]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="aspek" value="analisa_individu_kewirausahaan">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Nilai</span>
                                        <input type="text" class="form-control" name="nilai_akhir"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <label for="feedbackIndividu">Feedback</label><br>
                                    <textarea name="data_jawaban_penilai" id="feedbackIndividu" rows="5"></textarea>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </form>
                            </div>
                            <div class="card-footer text-muted">
                                Semangat dalam menilai !
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <!-- Tab File Upload -->
        <div class="tab-pane fade" id="file-upload" role="tabpanel" aria-labelledby="file-upload-tab">
            <h3 class="mt-3">File Upload Siswa</h3>
            @if($fileUploads->isEmpty())
                <p>Tidak ada file upload yang ditemukan.</p>
            @else
                <table class="table text-center table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Nama File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fileUploads as $index => $file)
                            @if(in_array($file->kategori, ['kegiatan pembelajaran 3', 'praktik lapangan 1', 'praktik lapangan 2']))
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $file->kategori }}</td>
                                    <td>{{ $file->original_name }}</td>
                                    <td>
                                        <!-- Button to trigger modal -->
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#pdfModal{{ $index }}">
                                            Lihat
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="pdfModal{{ $index }}" tabindex="-1"
                                            aria-labelledby="pdfModalLabel{{ $index }}" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="pdfModalLabel{{ $index }}">
                                                            {{ $file->original_name }}
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <embed src="{{ asset('storage/' . $file->file_path) }}"
                                                            type="application/pdf" width="100%" height="600px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                {{-- Di Hidden Dulu --}}
                <div class="row" hidden>
                    <!-- Form untuk Kategori: Kegiatan Pembelajaran 3 -->
                    <div class="col-12 mb-4">
                        <div class="card text-center">
                            <h5 class="card-header">Penilaian Kegiatan Pembelajaran 3</h5>
                            <div class="card-body">
                                <form action="{{ route('kirimJawabanIndividu', ['email' => $email]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="aspek" value="upload_file_pembelajaran3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Nilai</span>
                                        <input type="text" class="form-control" name="nilai_akhir"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <label for="feedbackIndividu">Feedback</label><br>
                                    <textarea name="data_jawaban_penilai" id="feedbackIndividu" rows="5"></textarea>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Form untuk Kategori: Praktik Lapangan 1 -->
                    <div class="col-12 mb-4">
                        <div class="card text-center">
                            <h5 class="card-header">Penilaian Praktik Lapangan 1</h5>
                            <div class="card-body">
                                <form action="{{ route('kirimJawabanIndividu', ['email' => $email]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="aspek" value="upload_file_aktivitas1">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Nilai</span>
                                        <input type="text" class="form-control" name="nilai_akhir"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <label for="feedbackIndividu">Feedback</label><br>
                                    <textarea name="data_jawaban_penilai" id="feedbackIndividu" rows="5"></textarea>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Form untuk Kategori: Praktik Lapangan 2 -->
                    <div class="col-12 mb-4">
                        <div class="card text-center">
                            <h5 class="card-header">Penilaian Praktik Lapangan 2</h5>
                            <div class="card-body">
                                <form action="{{ route('kirimJawabanIndividu', ['email' => $email]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="aspek" value="upload_file_aktivitas2">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Nilai</span>
                                        <input type="text" class="form-control" name="nilai_akhir"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <label for="feedbackIndividu">Feedback</label><br>
                                    <textarea name="data_jawaban_penilai" id="feedbackIndividu" rows="5"></textarea>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>
</div>
@endsection