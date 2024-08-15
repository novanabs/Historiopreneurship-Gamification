@extends('layouts.main')

@section('container')
<div class="mt-3">
    <div class="row mt-3">
        <div class="col">
            <h2>Data Jawaban Kelompok</h2>
            <p>Tempat untuk menilai tugas yang dikerjakan oleh mahasiswa</p>

            <!-- Nav Tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="sejarahan-tab" data-bs-toggle="tab" data-bs-target="#sejarahan"
                        type="button" role="tab" aria-controls="sejarahan" aria-selected="true">Kesejarahan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="aktivitas1-tab" data-bs-toggle="tab" data-bs-target="#aktivitas1"
                        type="button" role="tab" aria-controls="aktivitas1" aria-selected="false">Aktivitas 1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="aktivitas2-tab" data-bs-toggle="tab" data-bs-target="#aktivitas2"
                        type="button" role="tab" aria-controls="aktivitas2" aria-selected="false">Aktivitas 2</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="aktivitas3-tab" data-bs-toggle="tab" data-bs-target="#aktivitas3"
                        type="button" role="tab" aria-controls="aktivitas3" aria-selected="false">Aktivitas 3</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content mt-3" id="myTabContent">
                <!-- Tab Kesejarahan -->
                <div class="tab-pane fade show active" id="sejarahan" role="tabpanel" aria-labelledby="sejarahan-tab">
                    <table class="table text-center table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Kelompok</th>
                                <th scope="col">no_objek</th>
                                <th scope="col">Jawaban</th>
                                <th scope="col">Dibuat Oleh</th>
                                <th scope="col">Tanggal Dibuat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jawabanKesejarahan as $item)
                                <tr>
                                    <td>Kelompok {{ $item->id_kelompok }}</td>
                                    <td>{{ $item->no_objek }}</td>
                                    <td>{{ $item->jawaban }}</td>
                                    <td>{{ $item->created_by }}</td>
                                    <td>{{ $item->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Tab Aktivitas 1 -->
                <div class="tab-pane fade" id="aktivitas1" role="tabpanel" aria-labelledby="aktivitas1-tab">
                    <table class="table text-center table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Kelompok</th>
                                <th scope="col">Aspek</th>
                                <th scope="col">Jawaban</th>
                                <th scope="col">Dibuat Oleh</th>
                                <th scope="col">Tanggal Dibuat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jawabanKewirausahaan1 as $item)
                                <tr>
                                    <td>Kelompok {{ $item->id_kelompok }}</td>
                                    <td>{{ $item->aspek }}</td>
                                    <td>{{ $item->jawaban }}</td>
                                    <td>{{ $item->created_by }}</td>
                                    <td>{{ $item->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Tab Aktivitas 2 -->
                <div class="tab-pane fade" id="aktivitas2" role="tabpanel" aria-labelledby="aktivitas2-tab">
                    <table class="table text-center table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Kelompok</th>
                                <th scope="col">Aspek</th>
                                <th scope="col">Jawaban</th>
                                <th scope="col">Dibuat Oleh</th>
                                <th scope="col">Tanggal Dibuat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jawabanKewirausahaan2 as $item)
                                <tr>
                                    <td>Kelompok {{ $item->id_kelompok }}</td>
                                    <td>{{ $item->aspek }}</td>
                                    <td>{{ $item->jawaban }}</td>
                                    <td>{{ $item->created_by }}</td>
                                    <td>{{ $item->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Tab Aktivitas 3 -->
                <div class="tab-pane fade" id="aktivitas3" role="tabpanel" aria-labelledby="aktivitas3-tab">
                    <table class="table text-center table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Kelompok</th>
                                <th scope="col">Aspek</th>
                                <th scope="col">Jawaban</th>
                                <th scope="col">Dibuat Oleh</th>
                                <th scope="col">Tanggal Dibuat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jawabanKewirausahaan3 as $item)
                                <tr>
                                    <td>Kelompok {{ $item->id_kelompok }}</td>
                                    <td>{{ $item->aspek }}</td>
                                    <td>{{ $item->jawaban }}</td>
                                    <td>{{ $item->created_by }}</td>
                                    <td>{{ $item->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
