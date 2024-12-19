@extends('layouts.main')

@section('container-content')

<head>
    <style>
        .card {
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-weight: bold;
            font-size: 1.25rem;
        }

        /* Mengatur modal untuk berada di depan elemen lain */
.modal {
    margin-top: 50px;
}

.modal-backdrop {
    z-index: -1; /* Nilai backdrop modal */
}

    </style>
</head>

<body>
    <h2 class="mb-3">Dashboard</h2>
    
        <div class="row text-center">
            <!-- Profil -->
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <div class="card-body text-start">
                        <h5 class="card-title">Profil</h5>
                        <p class="card-text mt-5">Nama : {{ auth()->user()->nama_lengkap }}</p>
                        <p class="card-text">Kelas : {{ auth()->user()->kelas }}</p>
                        <p class="card-text">No HP : {{ auth()->user()->no_hp }}</p>
                        <p class="card-text">Email : {{ auth()->user()->email }}</p>
                        <p class="card-text">Alamat : {{ auth()->user()->alamat }}</p>
                    </div>
                </div>
            </div>
            @if (auth()->user()->peran == 'siswa')
            <!-- Badge -->
            <div class="col-md-6 mb-4">
                
                <div class="card p-4">
                    <div class="card-body">
                        <h5 class="card-title">Badge</h5>
                        <p class="card-text">Perolehan Badge ({{ $claimedBadges->count() }}/4)</p>
                        <!-- Display claimed badges -->
                        <div class="row">
                            @foreach ($claimedBadges as $badge)
                                <div class="col-md-4 mb-3">
                                    <img src="{{ asset($badge->link_gambar) }}" alt="{{ $badge->deskripsi }}" class="img-fluid"
                                        style="max-width: 100px;">
                                    <p class="text-center">{{ $badge->nama }}</p>
                                </div>
                            @endforeach
                            @if ($claimedBadges->isEmpty())
                                <div class="col-12">
                                    <p class="text-center">Belum ada badge yang diklaim.</p>
                                </div>
                            @endif
                        </div>
                        <button type="button" class="btn btn-primary disabled" data-bs-toggle="modal" data-bs-target="#badgeModal">
                            Cek Badge
                        </button>
                    </div>
                </div>
            </div>
            <!-- Badge Modal -->
            
            <div class="modal fade" id="badgeModal" tabindex="-1" aria-labelledby="badgeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="badgeModalLabel">Perolehan Badge</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Badges with Claim Buttons -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img src="{{ asset('img/high_rank.png') }}" alt="Master Badge" width="100px">
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <form action="{{ route('awardHighRankBadge') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success" id="claimButton" {{ $allAspectsFulfilled && !$highRankBadgeClaimed ? '' : 'disabled' }}>
                                            Klaim Badge
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img src="{{ asset('img/master.png') }}" alt="Master Badge" width="100px">
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <form action="{{ route('awardMasterBadge') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success" id="claimButton" {{ $allAspectsFulfilled && !$badgeMasterClaimed ? '' : 'disabled' }}>
                                            Klaim Badge
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img src="{{ asset('img/pembelajar_cepat.png') }}" alt="Fast Learner Badge"
                                        width="100px">
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <form action="{{ route('awardSiCepatBadge') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success" id="claimButton" {{ $allAspectsFulfilled && !$siCepatBadgeClaimed ? '' : 'disabled' }}>
                                            Klaim Badge
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img src="{{ asset('img/PenguasaMateri_gold.png') }}" alt="Master of Material Badge"
                                        width="100px">
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <form action="{{ route('awardPenguasaMateriBadge') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success" id="claimButton" {{ $allAspectsFulfilled && !$badgePenguasaMateriClaimed ? '' : 'disabled' }}>
                                            Klaim Badge
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Poin -->
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h5 class="card-title">Poin</h5>
                        <p class="card-text display-6">{{ auth()->user()->poin ?? 0 }}</p>
                    </div>
                    {{-- <div class="card-body">
                        <h5 class="card-title">Progress</h5>
                        <h6 class="text-start mt-3">1. Kesejarahan</h6>
                        <div class="progress rounded" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated"
                                style="width:{{$materi_b * 20}}%" id="status_bar"></div>
                        </div>

                        <h6 class="text-start mt-3">2. KWU & Kepariwisataan</h6>
                        <div class="progress rounded" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated"
                                style="width:{{$materi_c * 12.5}}%" id="status_bar"></div>
                        </div>
                    </div> --}}
                </div>
            </div>
    @endif
        <!-- Leaderboard -->
        <div class="col-md-6 mb-4">
            <div class="card p-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">Leaderboard</h5>
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
                                $n = 1;
                            @endphp
                            @foreach ($users as $user)
                            <tr>
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



@endsection