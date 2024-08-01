<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historio</title>
    {{-- Bootstap Lokal --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- AdminLTE --}}
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    {{-- Bootsrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://kit.fontawesome.com/c263d98dea.js" crossorigin="anonymous"></script>
    <style>
        body {
            overflow: hidden;
            overflow-y: scroll;
        }

        #leftCol {
            position: fixed;
            overflow-y: scroll;
            overflow: hidden;
            top: 0;
            bottom: 0;
        }

        .dafus {
            text-indent: -35px;
            padding-left: 36px;
        }

        /* Style untuk radio */
        .icon-radio {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .icon-radio input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 20px;
            height: 20px;
            border: 1px solid #ccc;
            border-radius: 50%;
            cursor: pointer;
        }

        .icon-radio input[type="radio"]:checked {
            background-color: #007bff;
            border-color: #007bff;
        }

        .icon-radio i {
            font-size: 40px;
            color: #FFB200;
            /* Ubah ukuran icon sesuai kebutuhan */
        }
    </style>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper ">
        {{-- Navbar --}}

        <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="bi bi-list"></i></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto ">
                <li>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Selamat datang, {{ auth()->user()->nama_lengkap }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li>
                                        <form action="{{route('login.logout')}}" method="get">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="bi bi-box-arrow-right"></i> Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth
    </div>
    </li>
    </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed" id="leftCol">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            {{-- <img src="#" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
            <span class="brand-text font-weight-light">Historiopreneurship</span>
        </a>
    <div class="sidebar ">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
            

            {{-- Halaman Guru --}}
            
            @if (auth()->user()->peran == 'guru')
            <li class="nav-header">MENU</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dataKelas') }}">
                    <i class="bi bi-speedometer"></i>
                   <p>Data Kelas</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dataMahasiswa') }}">
                    <i class="bi bi-speedometer"></i>
                   <p>Data Mahasiswa</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dataNilai') }}">
                    <i class="bi bi-speedometer"></i>
                   <p>Data Nilai</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dataLatihan') }}">
                    <i class="bi bi-speedometer"></i>
                   <p>Data Latihan</p>
                </a>
            </li>
                
            @endif
            @can('admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('latihan') }}">
                    <i class="bi bi-speedometer"></i>
                   <p>Latihan</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('info') }}">
                    <i class="bi bi-speedometer"></i>
                   <p>info sebelum mulai</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dragndrop') }}">
                    <i class="bi bi-speedometer"></i>
                   <p>Latihan</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('evaluasi') }}">
                    <i class="bi bi-speedometer"></i>
                   <p>Evaluasi</p>
                </a>
            </li>
            <li class="nav-item">
                
                <a class="nav-link" href="{{ route('dashboard.showUser') }}">
                    <i class="bi bi-speedometer"></i>
                   <p>Dashboard Admin</p>
                </a>
            </li>
            @endcan
            <li class="nav-header">MATERI</li>
            {{-- <li class="nav-item">
                @if (auth()->user()->peran != 'admin')
                   <a href="{{ route('dashboard.index') }}" class="nav-link">
                <i class="bi bi-layout-text-window-reverse"></i>
                <p>
                  Dashboard
                </p>
              </a> 
                @endif
            </li> --}}
            
            <li class="nav-item">
              <a href="#" class="nav-link bab">
                <i class="bi bi-info-circle"></i>
                <p>Informasi Umum</p><i class="right bi bi-chevron-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ">
                    <a href="{{ route('pages.A') }}#CPL" class="nav-link sub active">
                        <i class="bi bi-dot"></i>
                        <p>CPL</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#CPMK" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>CPMK</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#peran-dosen" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Peran Dosen</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#sarana-dan-prasaran" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Sarana dan Prasana</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#kolaborasi-narasumber" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Kolaborasi Narasumber</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#cara-penggunaan" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Cara Penggunaan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#tahapan" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Tahapan</p>
                    </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bab">
                <i class="bi bi-1-square-fill"></i>
                <p>Kesejarahan</p><i class="right bi bi-chevron-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#kegiatan-pembelajaran-1" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Kegiatan Pembelajaran 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#kegiata-pembelajaran-2" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Kegiatan Pembelajara 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#lembar-analisi-kelompok" class="nav-link sub">
                            <i class="bi bi-dot"></i>
                            <p class="text-left">Analisis Kelompok</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#lembar-analisis-individu" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Analisis Individu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#kegiatan-pembelajaran" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Kegiatan Pembelajaran 3</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#refleksi" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Refleksi</p>
                    </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link bab">
                <i class="bi bi-2-square-fill"></i>
                <p class="text-start">KWU & Kepariwisataan</p><i class="right bi bi-chevron-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#kewirausahaan-dan-kepariwisataan" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>KWU & Kepariwisataan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#lembar-analisa-kelompok-1" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Analisa Kelompok 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#lembar-analisa-kelompok-2" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Analisa Kelompok 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#lembar-diskusi-kelompok" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Diskusi Kelompok</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#lembar-proyek-individu" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Proyek Individu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#refleksi-1" class="nav-link sub">
                        <i class="bi bi-dot"></i>
                        <p>Refleksi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#praktik-lapangan-1" class="nav-link sub text-muted disabled">
                        <i class="bi bi-lock"></i>
                        <p>Praktik Lapangan 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#praktik-lapangan-2" class="nav-link sub text-muted disabled">
                        <i class="bi bi-lock"></i>
                        <p>Praktik Lapangan 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#refleksi-2" class="nav-link sub text-muted disabled">
                        <i class="bi bi-lock"></i>
                        <p>Refleksi</p>
                    </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
                {{-- Admin tidak melihat ini --}}
                @if (auth()->user()->peran != 'admin')
                   <a href="{{ route('dragndrop') }}" class="nav-link">
                <i class="bi bi-layout-text-window-reverse"></i>
                <p>
                  Latihan
                </p>
              </a> 
                @endif
              
            </li>
            <li class="nav-item">
                {{-- Admin tidak melihat ini --}}
                @if (auth()->user()->peran != 'admin')
                   <a href="{{ route('evaluasi') }}" class="nav-link">
                <i class="bi bi-layout-text-window-reverse"></i>
                <p>
                  Evaluasi
                </p>
              </a> 
                @endif
              
            </li>
            <li class="nav-item mb-5">
                {{-- Admin tidak melihat ini --}}
                @if (auth()->user()->peran != 'admin')
                   <a href="{{route('pages.dafus')}}" class="nav-link">
                <i class="bi bi-layout-text-window-reverse"></i>
                <p>
                  Daftar Pustaka
                </p>
              </a> 
                @endif
              
            </li>
            </li>
            
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </aside>
    <div class="content-wrapper">
        <section class="container mt-3">
            <div class="row">
                <div class="col text-center mt-5">
                    <h1>HISTORIOPRENEURSHIP</h1>
                </div>
            </div>
            <div class="container">
                @yield('container')
            </div>
        </section>
    </div>



    </div>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- data tables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>

    <script>
        // Ambil bab dan sub
        const $bab = document.getElementsByClassName('bab');
        // const $get_sub = document.getElementsByClassName('sub');
        const $get_sub = document.querySelectorAll('.sub');
        // console.log('Bab', $bab);
        // console.log('GetSub', $get_sub)

        for(let j=0; j < $bab.length; j++){
            // const $per_bab = $bab[j].querySelector('a.nav-link.bab p');
            // console.log($per_bab)
            // $bab[j].classList.add('active')

        }

        for(let i=0; i < $get_sub.length; i++){
            // const $nodes = $get_sub[i].querySelector('a.nav-link.sub p').innerHTML;
            // console.log($nodes);
            // $get_sub[i].classList.add('active')
        }

        $get_sub.forEach(link => {
            link.addEventListener('click', function() {
                // Remove the 'active' class from all nav links
                $get_sub.forEach(nav => nav.classList.remove('active'));

                // Add the 'active' class to the clicked nav link
                this.classList.add('active');
            });
        });

    </script>

</body>

</html>