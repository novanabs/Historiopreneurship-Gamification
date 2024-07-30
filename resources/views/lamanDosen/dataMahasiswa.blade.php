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
                        <th scope="col">Kelas</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>A1</td>
                        <td>Salman</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <th scope="row">2</td>
                        <td>A2</td>
                        <td>Ramadhani</td>
                        <td>80</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        // Inisialisasi DataTable
        var table = $('#tabelMahasiswa').DataTable();

        // Event listener untuk dropdown filter kelas
        $('#filterKelas').on('change', function() {
            var selectedValue = $(this).val();
            table.column(1).search(selectedValue).draw(); // Kolom kedua (index 1) adalah kolom "Kelas"
        });
    });
</script>
@endsection
