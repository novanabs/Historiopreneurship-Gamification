
@extends('layouts.main')

@section('container')

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa</title>
    <style>
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-weight: bold;
            font-size: 1.25rem;
        }
        .container {
            max-width: 1200px;
            margin-top: 50px;
        }
    </style>
</head>
<body>

        <div class="row text-center">
            <!-- Profil -->
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h5 class="card-title">Profil</h5>
                        <p class="card-text mt-5">Nama : {{ auth()->user()->nama_lengkap }}</p>
                        <p class="card-text">Kelas : {{ auth()->user()->kelas }}</p>
                        <p class="card-text">No HP : {{ auth()->user()->no_hp }}</p>
                        <p class="card-text">Email : {{ auth()->user()->email }}</p>
                        <p class="card-text">Alamat : {{ auth()->user()->alamat }}</p>
                    </div>
                </div>
            </div>
            <!-- Badge -->
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h5 class="card-title">Badge</h5>
                        <p class="card-text">Perolehan Badge (0/4)</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><img src="{{ asset('img/high_rank.png') }}" alt="aktif" width="100px"></li>
                            <li class="list-inline-item"><img src="{{ asset('img/master.png') }}" alt="rajin" width="100px"></li>
                            <li class="list-inline-item"><img src="{{ asset('img/pembelajar_cepat.png') }}" alt="cepat" width="100px"></li>
                            <li class="list-inline-item"><img src="{{ asset('img/penguasa_materi.png') }}" alt="cepat" width="100px"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Poin -->
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h5 class="card-title">Poin</h5>
                        <p class="card-text display-5">{{ auth()->user()->poin }}</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Progress</h5>
                        <br><br>

                        <h6 class="text-start">Informasi Umum</h6>
                        <div class="progress rounded" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated text-dark" style="width:100%" id="status_bar"></div>
                        </div> 

                        <h6 class="text-start mt-3">1. Kesejarahan</h6>
                        <div class="progress rounded" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                           <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width:57%" id="status_bar"></div>
                        </div> 

                        <h6 class="text-start mt-3">2. KWU & Kepariwisataan</h6>
                        <div class="progress rounded" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width:23%" id="status_bar"></div>
                        </div> 

                        
                    </div>
                </div>
            </div>
            <!-- Leaderboard -->
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h5 class="card-title">Leaderboard</h5>
                        <p class="card-text">Top 10 Siswa:</p>
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Poin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $n= 1;
                                @endphp
                                @foreach ($users as $user)
                                <tr>

                                    <th>1</th>
                                    <td>Madhan</td>
                                    <td>2134</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Salman</td>
                                    <td>2130</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Husna</td>
                                    <td>2122</td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Iif Alifah</td>
                                    <td>2120</td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Siswa</td>
                                    <td>2103</td>
                                </tr>
                                <tr>
                                    <th>6</th>
                                    <td>Ari Yono</td>
                                    <td>2078</td>
                                </tr>
                                <tr>
                                    <th>7</th>
                                    <td>Fadhil</td>
                                    <td>2068</td>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <td>Fajar</td>
                                    <td>2000</td>
                                </tr>
                                <tr>
                                    <th>9</th>
                                    <td>Saipul</td>
                                    <td>1994</td>
                                </tr>
                                <tr>
                                    <th>10</th>
                                    <td>Fuad</td>
                                    <td>1800</td>
                                    <th scope="row">{{ $n }}</th>
                                    <td>{{ $user->nama_lengkap }}</td>
                                    <td>{{ $user->poin }}</td>
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
        </div>

</body>
</html>

@endsection