@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="//cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css">
<div class="mt-3">
    <div class="row mt-3">
        <div class="col">
            <h2>Data Latihan</h2>
            <p>Menampilkan data hasil latihan, dosen dapat melakukan export dan menggunakan data table</p>
            <table class="table text-center" id="dataLatihanTable">
                <thead>
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nilai Latihan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>A1</td>
                        <td>Hendri</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>A2</td>
                        <td>Arifin</td>
                        <td>85</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>A1</td>
                        <td>Azimi</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>A2</td>
                        <td>Irfan</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>A1</td>
                        <td>Dayat</td>
                        <td>70</td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary">Export</button>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src ="//cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataLatihanTable').DataTable();
    });
</script>
@endsection