@extends('layouts.main')

@section('container')

<div class="mt-3">
    <div class="row mt-3">
        <div class="col">
            <h2>Data Jawaban Kelompok</h2>
            <p>Tempat untuk menilai tugas yang dikerjakan oleh mahasiswa</p>
            <table class="table text-center">
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
                    @foreach($jawaban as $item)
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
    </div>
</div>

@endsection
