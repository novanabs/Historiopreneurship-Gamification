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
        .container {
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

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

    /* .img-background {
            background-image: url("https://duniamasjid.islamic-center.or.id/wp-content/uploads/2014/05/masjid-sultan-suriansyah.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            filter: grayscale(1);
        } */

    </style>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper ">
        {{-- Navbar --}}

        <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top" id="navbarHead">
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
                                    {{-- <li>
                                        <form action="" method="get">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="bi bi-person-circle"></i> Profil
                                            </button>
                                        </form>
                                    </li> --}}
                                    @if (auth()->user()->peran == 'siswa')
                                    <li>                                        
                                        <form action="{{route('pages.reviewGuru')}}" method="get">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="bi bi-journal-check"></i> Review jawaban
                                            </button>
                                        </form>
                                    </li>
                                    @endif
                                    <li>
                                        <form action="{{route('login.logout')}}" method="get">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="bi bi-box-arrow-right"></i> Log Out
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
                    <i class="bi bi-list-task"></i>
                   <p>Data Kelas</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dataMahasiswa') }}">
                    <i class="bi bi-people-fill"></i>
                   <p>Data Mahasiswa</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dataNilai') }}">
                    <i class="bi bi-list-ol"></i>
                   <p>Data Nilai</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dataEvaluasi') }}">
                    <i class="bi bi-journal-text"></i>
                   <p>Data Evaluasi</p>
                </a>
            </li>
                
            @endif

            @if (auth()->user()->peran == 'siswa')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('evaluasi') }}">
                    <i class="bi bi-speedometer"></i>
                   <p>Evaluasi</p>
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

            <li class="nav-item">
                <a class="nav-link" href="{{ route('pages.materi') }}" >
                    <i class="bi bi-speedometer"></i>
                   <p>Materi</p>
                </a>
            </li>
            @endcan


            @if (auth()->user()->peran == 'siswa')
            <li class="nav-item m {{ isset($halaman_terbuka) && $halaman_terbuka == 'dashboard' ? 'menu-open' : '' }}">
                <a class="nav-link" href="{{ route('dashboard.index') }}" >
                    <i class="bi bi-speedometer"></i>
                   <p>Dashboard</p>
                </a>
            </li>
            @endif

            @if (auth()->user()->peran == 'siswa')
            <li class="nav-header">MATERI</li>
            {{-- A. INFORMASI UMUM --}}
            <li class="nav-item {{ isset($halaman_terbuka) && $halaman_terbuka == 'A' ? 'menu-is-opening menu-open' : '' }}">
                <a href="{{ route('pages.A') }}" class="nav-link bab {{ session('active_menu') == 'pages.A' ? 'active' : '' }}" onclick="setSidebarStatus('CPL', 'pages.A')">
                    <i class="bi bi-info-circle"></i>
                    <p>Informasi Umum</p><i class="right bi bi-chevron-left"></i>
                  </a>
              
              <ul class="nav nav-treeview" id="side_A">
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#Halaman-CPL" class="nav-link sub {{ session('active_menu_sub') == 'CPL' ? 'active' : '' }}" name='CPL' onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-dot"></i> CPL</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#Halaman-CPMK" class="nav-link sub disabled text-gray {{ session('active_menu_sub') == 'CPMK' ? 'active' : '' }}" name="CPMK" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> CPMK</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#Halaman-Peran-Dosen" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'peran-dosen' ? 'active' : '' }}" name="peran-dosen" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Peran Dosen</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#Halaman-Sarana-dan-Prasarana" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'sarana-dan-prasarana' ? 'active' : '' }}" name="sarana-dan-prasarana" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Sarana dan Prasana</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#Halaman-Kolaborasi-Narasumber" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'kolaborasi-narasumber' ? 'active' : '' }}" name="kolaborasi-narasumber" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Kolaborasi Narasumber</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#Halaman-Cara-Penggunaan" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'cara-penggunaan' ? 'active' : '' }}" name="cara-penggunaan" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Cara Penggunaan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.A') }}#Halaman-Tahapan" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'tahapan' ? 'active' : '' }}" name="tahapan" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Tahapan</p>
                    </a>
                </li>
              </ul>
            </li>

            {{-- B.KESEJARAHAN --}}
            <li class="nav-item  {{ isset($halaman_terbuka) && $halaman_terbuka == 'B' ? 'menu-is-opening menu-open' : '' }}">
              <a href="{{ route('pages.B') }}" class="nav-link bab {{ session('active_menu') == 'pages.B' ? 'active' : '' }}" onclick="setSidebarStatus('kegiatan-pembelajaran-1', 'pages.B')">
                <i class="bi bi-1-square-fill"></i>
                <p>Kesejarahan</p><i class="right bi bi-chevron-left"></i>
              </a>
              <ul class="nav nav-treeview" id="side_B">
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#Pre-Test-1" class="nav-link sub {{ session('active_menu_sub') == 'pre-test-1' ? 'active' : '' }}" name="pre-test-1" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-dot"></i> Pre-Test</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#Halaman-Kegiatan-Pembelajaran-1" class="nav-link sub  disabled text-gray  {{ session('active_menu_sub') == 'kegiatan-pembelajaran-1' ? 'active' : '' }}" name="kegiatan-pembelajaran-1" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-dot"></i> Kegiatan Pembelajaran 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#Halaman-Kegiatan-Pembelajaran-2" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'kegiatan-pembelajaran-2' ? 'active' : '' }}" name="kegiatan-pembelajaran-2" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Kegiatan Pembelajaran 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#Halaman-Lembar-Analisa-Kelompok" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'lembar-analisa-kelompok' ? 'active' : '' }}" name="lembar-analisa-kelompok" onclick="setSidebarStatusSub(this)">
                            <p class="text-left"><i class="bi bi-lock"></i> Analisis Kelompok</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#Halaman-Lembar-Analisa-Individu" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'lembar-analisa-individu' ? 'active' : '' }}" name="lembar-analisa-individu" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Analisis Individu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#Halaman-Kegiatan-Pembelajaran-3" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'kegiatan-pembelajaran-3' ? 'active' : '' }}" name="kegiatan-pembelajaran-3" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Kegiatan Pembelajaran 3</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#Post-Test-1" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'post-test-1' ? 'active' : '' }}" name="post-test-1" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Pos-Test</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.B') }}#Halaman-Refleksi" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'refleksi' ? 'active' : '' }}" name="refleksi" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Refleksi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dragndrop') }}" class="nav-link disabled sub text-gray ">
                        <i class="bi bi-lock"></i>
                        <p>
                          Latihan DND
                        </p>
                      </a> 
                </li>
              </ul>
            </li>

            {{-- C. KWU & KEWIRAUSAHAAN --}}
            <li class="nav-item  {{ isset($halaman_terbuka) && $halaman_terbuka == 'C' ? 'menu-is-opening menu-open' : '' }}">
              <a href="{{ route('pages.C') }}" class="nav-link bab {{ session('active_menu') == 'pages.C' ? 'active' : '' }}" onclick="setSidebarStatus('kewirausahaan-dan-kepariwisataan', 'pages.C')">
                <i class="bi bi-2-square-fill"></i>
                <p class="text-start">KWU & Kepariwisataan</p><i class="right bi bi-chevron-left"></i>
              </a>
              <ul class="nav nav-treeview" id="side_C">
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#Pre-Test-2" class="nav-link sub {{ session('active_menu_sub') == 'pre-test-2' ? 'active' : '' }}" name="pre-test-2" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-dot"></i> Pre-Test</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#Halaman-Kewirausahaan-dan-kepariwisataan" class="nav-link sub {{ session('active_menu_sub') == 'kewirausahaan-dan-kepariwisataan' ? 'active' : '' }}" name="kewirausahaan-dan-kepariwisataan" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-dot"></i> KWU & Kepariwisataan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#Halaman-Lembar-Analisa-Kelompok-1" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'lembar-analisa-kelompok-1' ? 'active' : '' }}" name="lembar-analisa-kelompok-1" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Analisa Kelompok 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#Lembar-Analisa-Kelompok-2" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'lembar-analisa-kelompok-2' ? 'active' : '' }}" name="lembar-analisa-kelompok-2" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Analisa Kelompok 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#Lembar-Diskusi-Kelompok" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'lembar-diskusi-kelompok' ? 'active' : '' }}" name="lembar-diskusi-kelompok" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Diskusi Kelompok</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#Lembar-Proyek-Individu" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'lembar-proyek-individu' ? 'active' : '' }}" name="lembar-proyek-individu" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Proyek Individu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#Refleksi-1" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'refleksi-1' ? 'active' : '' }}" name="refleksi-1" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Refleksi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#Refleksi-2" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'praktik-lapangan-1' ? 'active' : '' }}" name="praktik-lapangan-1" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Praktik Lapangan 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#Praktik-Lapangan-2" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'praktik-lapangan-2' ? 'active' : '' }}" name="praktik-lapangan-2" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Praktik Lapangan 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#Post-Test-2" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'post-test-2' ? 'active' : '' }}" name="post-test-2" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Pos-Test</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.C') }}#Refleksi-2" class="nav-link sub  disabled text-gray {{ session('active_menu_sub') == 'refleksi-2' ? 'active' : '' }}" name="refleksi-2" onclick="setSidebarStatusSub(this)">
                        <p><i class="bi bi-lock"></i> Refleksi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('latihan2') }}" class="nav-link sub disabled text-gray ">
                        <i class="bi bi-lock"></i>
                        <p>
                          Latihan TTS
                        </p>
                      </a> 
                </li>
              </ul>
            </li>
            @endif
            <li class="nav-item">
                {{-- Admin tidak melihat ini --}}
                @if (auth()->user()->peran != 'admin' and auth()->user()->peran != 'guru')
                   <a href="{{ route('info') }}" class="nav-link">
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
    <div class="content-wrapper img-background" id="content-wrapper">
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

        // Nav Link Navigate
        const nav_link = document.querySelectorAll('.nav-link.sub');
        console.log(nav_link)

        // Suara pada saat klik
        var click_sound = new Audio("{{ asset('sound/Click.mp3') }}")

        function cekking(event){
            click_sound.play()
            console.log('Event', event);
            console.log('Target', event.currentTarget);
            console.log('Tombol di tekan', event.currentTarget.name);
            hide_semua_sub();
            document.getElementById(event.currentTarget.name).style.display = 'block';
        }
        

        nav_link.forEach(nav_link => {
            nav_link.addEventListener('click', cekking)
        })

        // Untuk mengaktifkan dan nonaktifkan sub di sidebar
        function active_sub(info){
            if({{ isset($halaman_terbuka) }}){
                console.log("Halaman Terbuka", {{ isset($halaman_terbuka) }})
            }else{
                click_sound.play()
            }

            if(info == 'nav'){
                click_sound.play()
            }
            
            // matikan_active();
            nav_link.forEach(element => {
                if(element.name == materi_a[$sub].id){
                    console.log(element.name, materi_a[$sub].id);
                    console.log(element);
                    element.classList.add('active');
                    element.classList.remove('disabled');
                    element.classList.remove('text-gray');

                    // Mengubah lock menjadi dot
                    element.querySelector('i').classList.remove('bi-lock')
                    element.querySelector('i').classList.add('bi-dot')
                }else{
                    element.classList.remove('active');
                }
            });
            
        }

        active_sub()
        
        // Mempertahankan progress halaman
        // Index dimulai dari 0

        let $progress_a = {{session('materi_a') ?? 0}}
        let $progress_b = {{session('materi_b') ?? 0}}
        let $progress_c = {{session('materi_c') ?? 0}}

        function buka_sub($side, $bab){
            console.log('MAU BUKA SUB YAAA', $side)
            if($bab == "A"){
                for(let i=0; i<=$progress_a;i++){
                    console.log($progress_a)
                    $side[i].querySelector('a').classList.remove('disabled');
                    $side[i].querySelector('a').classList.remove('text-gray');

                    // Mengubah lock menjadi dot
                    $side[i].querySelector('i').classList.remove('bi-lock')
                    $side[i].querySelector('i').classList.add('bi-dot')
                }
            }else if($bab == "B"){
                for(let i=0; i<=$progress_b;i++){
                    console.log($progress_b)
                    $side[i].querySelector('a').classList.remove('disabled');
                    $side[i].querySelector('a').classList.remove('text-gray');

                    // Mengubah lock menjadi dot
                    $side[i].querySelector('i').classList.remove('bi-lock')
                    $side[i].querySelector('i').classList.add('bi-dot')
                }
            }else if($bab == "C"){
                for(let i=0; i<=$progress_c;i++){
                    console.log($progress_c)
                    $side[i].querySelector('a').classList.remove('disabled');
                    $side[i].querySelector('a').classList.remove('text-gray');

                    // Mengubah lock menjadi dot
                    $side[i].querySelector('i').classList.remove('bi-lock')
                    $side[i].querySelector('i').classList.add('bi-dot')
                }
            }
        }

        let $side_A = document.querySelectorAll('#side_A li')
        let $side_B = document.querySelectorAll('#side_B li')
        let $side_C = document.querySelectorAll('#side_C li')
        buka_sub($side_A, 'A')
        buka_sub($side_B, 'B')
        buka_sub($side_C, 'C')
        
        

    </script>

</body>

</html>