@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <h2>Jawaban Individu</h2>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="kesejarahan-tab" data-bs-toggle="tab" data-bs-target="#kesejarahan"
                type="button" role="tab" aria-controls="kesejarahan" aria-selected="true">Kesejarahan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="kewirausahaan-tab" data-bs-toggle="tab" data-bs-target="#kewirausahaan"
                type="button" role="tab" aria-controls="kewirausahaan" aria-selected="false">Kewirausahaan</button>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
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
            @endif
        </div>

        <!-- Tab Kewirausahaan -->
        <div class="tab-pane fade" id="kewirausahaan" role="tabpanel" aria-labelledby="kewirausahaan-tab">
            <h3 class="mt-3">Jawaban Kewirausahaan</h3>
            @if($jawabanKewirausahaandanPariwisataIndividu->isEmpty())
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
                        @foreach($jawabanKewirausahaandanPariwisataIndividu as $index => $jawaban)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $jawaban->aspek }}</td>
                                <td>{{ $jawaban->jawaban }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
