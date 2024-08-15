
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
                        <p class="card-text">Nama : {{ auth()->user()->nama_lengkap }}</p>
                        <p class="card-text">Kelas : </p>
                        <p class="card-text">Sekolah :</p>
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
                        <p class="card-text display-5">42%</p>
                    </div>
                </div>
            </div>
            <!-- Badge -->
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h5 class="card-title">Badge</h5>
                        <p class="card-text">3 Badge Dimiliki</p>
                        <ul class="list-unstyled">
                            <li>Badge 1</li>
                            <li>Badge 2</li>
                            <li>Badge 3</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Leaderboard -->
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h5 class="card-title">Leaderboard</h5>
                        <p class="card-text">Peringkat 5</p>
                        <p class="card-text">Top 10 Siswa:</p>
                        <ul class="list-unstyled">
                            <li>1. Siswa A</li>
                            <li>2. Siswa B</li>
                            <li>3. Siswa C</li>
                            <li>4. Siswa D</li>
                            <li>5. Siswa E</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>

@endsection