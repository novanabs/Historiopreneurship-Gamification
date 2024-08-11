@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="//cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css">
<div class="mt-3">
    <div class="row mt-3">
        <div class="col">
            <h2>Data Mahasiswa</h2>
            <p>Menampilkan data mahasiswa keseluruhan, bisa di filter berdasarkan kelas</p>
            <!-- Dropdown untuk filter kelas dengan ukuran lebih kecil -->
            <label for="filterKelas">Filter Kelas: </label>
            <select id="filterKelas" class="form-control form-control-sm mb-3" style="width: 150px;">
                <option value="">Semua</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
            </select>

            <table class="table text-center mt-3" id="tabelMahasiswa">
                <thead>
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp

                    @foreach($Mahasiswas as $Mahasiswa)
                        <tr>
                            <th scope="row">{{ $no }}</th>
                            <td>{{ $Mahasiswa->nama_lengkap }}</td>
                            <td>{{ $Mahasiswa->kelas }}</td>
                            <td>{{ $Mahasiswa->email }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Masukkan Kelompok
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        @for ($i = 1; $i <= 4; $i++)
                                            <li>
                                                <form action="{{ route('dataMahasiswa.saveGroup') }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    <input type="hidden" name="email" value="{{ $Mahasiswa->email }}">
                                                    <input type="hidden" name="id_kelompok" value="{{ $i }}">
                                                    <button type="submit" class="dropdown-item">{{ $i }}</button>
                                                </form>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @php
                            $no++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        // Inisialisasi DataTable
        var table = $('#tabelMahasiswa').DataTable();

        // Event listener untuk dropdown filter kelas
        $('#filterKelas').on('change', function () {
            var selectedValue = $(this).val();
            table.column(2).search(selectedValue).draw(); // Kolom ketiga (index 2) adalah kolom "Kelas"
        });
    });
</script>

@endsection
