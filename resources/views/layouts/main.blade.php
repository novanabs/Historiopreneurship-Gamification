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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
          {{-- <img src="#" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
          <span class="brand-text font-weight-light">Historiopreneurship</span>
        </a>
    <div class="sidebar " data-bs-spy="scroll">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">MENU</li>
            <li class="nav-item">
              <a href="{{ route('dashboard.index') }}" class="nav-link">
                <i class="bi bi-layout-text-window-reverse"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="bi bi-info-circle"></i>
                <p>
                  Informasi Umum
                  <i class="right bi bi-chevron-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#CPL" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>CPL</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#CPMK" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>CPMK</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#peran-dosen" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Peran Dosen</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#sarana-dan-prasaran" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Sarana dan Prasana</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#kolaborasi-narasumber" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Kolaborasi Narasumber</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#cara-penggunaan" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Cara Penggunaan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#tahapan" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Tahapan</p>
                    </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="bi bi-1-square-fill"></i>
                <p>
                  Kesejarahan
                  <i class="right bi bi-chevron-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Kegiatan Pembelajaran 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Kegiatan Pembelajara 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Lembar Analisis Kelompok</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Lembar Analisis Individu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Kegiatan Pembelajaran 3</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Laporan Kegiatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Refleksi</p>
                    </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="bi bi-2-square-fill"></i>
                <p class="text-start">
                  Kewirausahaan & Kepariwisataan
                  <i class="right bi bi-chevron-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Lembar Analisa Kelompok 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Lembar Analisa Kelompok 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Lembar Diskusi Kelompok</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Lembar Proyek Individu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Refleksi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Praktik Lapangan 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Praktik Lapangan 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}" class="nav-link">
                        <i class="bi bi-dot"></i>
                        <p>Refleksi</p>
                    </a>
                </li>
              </ul>
            </li>
            </li>
            <li class="nav-item">
                @can('admin')
                <a class="nav-link" href="{{ route('dashboard.showUser') }}">
                    <i class="bi bi-people"></i> 
                   <p>Data Pengguna</p>
                </a>
                @endcan
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </aside>
    

      <section class="container mt-3">
        <div class="row">
          <div class="col text-center">
              <h1>HISTORIOPRENEURSHIP</h1>
          </div>
      </div>
        @yield('container')
    </section>
    
    </div>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
</body>
</html>
