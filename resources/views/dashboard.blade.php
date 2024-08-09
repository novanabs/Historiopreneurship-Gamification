
@extends('layouts.main')

@section('container')

    
    <div class="mt-3">
        <div class="row">
            <div class="col">
                <h2 class="mb-3">Selamat Datang, {{ Auth::user()->nama_lengkap }}</h2>
                <table class="table table-bordered table-sm">
                    <tr>
                        <td>Poin</td>
                        <td>{{ Auth::user()->poin }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection