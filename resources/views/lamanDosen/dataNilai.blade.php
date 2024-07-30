@extends('layouts.main')

@section('container')

<div class="mt-3">
    <div class="row mt-3">
        <div class="col">
            <h2>Data Nilai</h2>
            <p>Tempat untuk menilai tugas yang dikerjakan oleh mahasiswa</p>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>A1</td>
                        <td>Muhammad Salman</td>
                        <td>Perlu Dinilai</td>
                        <td>
                            <button type="button" class="btn btn-success">Selesai</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection