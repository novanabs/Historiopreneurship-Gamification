@extends('layouts.main')

@section('container')

    <div class="mt-3">
        <div class="row">
            <div class="col-md-10">
                <h1>Tabel Data Pengguna</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Email</th>
                            <th scope="col">Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $n= 1;
                        @endphp
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $n }}</th>
                            <td>{{ $user->nama_lengkap }}</td>
                            <td>{{ $user->nim }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ ($user->is_admin)== 1 ? "Admin" : "User" }}</td>
                        </tr>
                        @php
                            $n++;
                        @endphp
                        @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    {{-- JavaScript Local --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

@endsection