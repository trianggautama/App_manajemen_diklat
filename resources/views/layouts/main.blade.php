halo
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/simple-datatables/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/chartjs/Chart.min.css')}}">
    <link rel="stylesheet" href="{{asset('iziToast/iziToast.css')}}" />
    <link rel="stylesheet" href="{{asset('iziToast/iziToast.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.svg')}}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="{{asset('pemprov.png')}}" alt="" srcset=""> <small>Manajemen Diklat</small>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        @if(Auth::user()->role == 1)
                        <li class='sidebar-title'>Main Menu</li>
                        <li class="sidebar-item active ">
                            <a href="{{Route('userAdmin.beranda')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>beranda</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="database" width="20"></i>
                                <span>Master Data</span>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{Route('userAdmin.skpd.index')}}">SKPD</a>
                                </li>
                                <li>
                                    <a href="{{Route('userAdmin.jenis_diklat.index')}}">Jenis Diklat</a>
                                </li>
                                <li>
                                    <a href="{{Route('userAdmin.penyakit.index')}}">Penyakit Bawaan</a>
                                </li>
                                <li>
                                    <a href="{{Route('userAdmin.objek_penilaian.index')}}">Objek Penilaian</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="users" width="20"></i>
                                <span>Manajemen User</span>
                            </a>
                            <ul class="submenu ">

                                <li>
                                    <a href="{{Route('userAdmin.widyaiswara.index')}}">User Widyaiswara</a>
                                </li>

                                <!-- <li>
                                    <a href="">User Peserta</a>
                                </li> -->
                            </ul>

                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span>Data Pelatihan</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="{{Route('userAdmin.pelatihan.index')}}">Agenda Pelatihan</a>
                                </li>
                                <li>
                                    <a href="{{Route('userAdmin.anggaran.index')}}">Anggaran</a>
                                </li>
                                <li>
                                    <a href="{{Route('userAdmin.laporan_aktualisasi.index')}}">Perpustakaan</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="printer" width="20"></i>
                                <span>Laporan</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="{{Route('report.skpd')}}" target="__blank"> SKPD</a>
                                </li>
                                <li>
                                    <a href="{{Route('report.penyakit')}}" target="__blank"> Penyakit Bawaan</a>
                                </li>
                                <li>
                                    <a href="{{Route('report.widyaiswara')}}" target="__blank"> Widyaiswara</a>
                                </li>
                                <li>
                                    <a href="{{Route('report.pelatihan')}}" target="__blank"> Pelatihan</a>
                                </li>
                                <li>
                                    <a href="{{Route('report.pelatihan.filter')}}"> Pelatihan Filter Waktu</a>
                                </li>
                                <li>
                                    <a href="{{Route('userAdmin.laporan_aktualisasi.filter')}}"> Peserta Pelatihan</a>
                                </li>
                                <li>
                                    <a href="{{Route('userAdmin.laporan_aktualisasi.filter')}}"> Laporan Aktualisasi</a>
                                </li>
                                <li>
                                    <a href="{{Route('userAdmin.laporan_aktualisasi.filter')}}">Sertifikat</a>
                                </li>
                            </ul>
                        </li> 
                        @elseif(Auth::user()->role == 2)
                        <li class='sidebar-title'>Menu Widyaiswara</li>
                        <li class="sidebar-item  ">
                            <a href="{{Route('userWidyaIswara.beranda')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="{{Route('userWidyaIswara.profil')}}" class='sidebar-link'>
                                <i data-feather="user" width="20"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span>Data Pelatihan</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="{{Route('userWidyaIswara.pelatihan_widyaiswara.index')}}">Agenda Pelatihan</a>
                                </li>
                                <!-- <li>
                                    <a href="{{Route('userWidyaIswara.pelatihan_widyaiswara.riwayat')}}">riwayat Pelatihan</a>
                                </li> -->
                            </ul>
 
                        </li>
                        @endif 
                        @if(Auth::user()->role == 3)
                        <li class='sidebar-title'>Menu Widyaiswara</li>
                        <li class="sidebar-item  ">
                            <a href="{{Route('userPeserta.beranda')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="{{Route('userPeserta.profil')}}" class='sidebar-link'>
                                <i data-feather="user" width="20"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="{{Route('userPeserta.laporan_aktualisasi.index')}}" class='sidebar-link'>
                                <i data-feather="file" width="20"></i>
                                <span>Laporan Aktualisasi</span>
                            </a>
                        </li>
                        @endif 
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success me-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="{{asset('admin/assets/images/avatar/avatar-s-1.png')}}" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, {{Auth::user()->nama}}</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="dropdown-divider"></div>
                                {{-- <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a> --}}
                                <a class="dropdown-item" href="{{ route('auth.logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    <i data-feather="log-out"></i> Logout
                                </a>
                                <form id="frm-logout" action="{{ route('auth.logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content')
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="text-centers">
                        <p>2021 &copy; Pemerintah Provinsi Kalimantan Selatan</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('admin/assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/app.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendors.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('iziToast/iziToast.js')}}"></script>
    <script src="{{asset('admin/assets/js/main.js')}}"></script>
    @include('layouts.alert')
    @include('layouts.alert_error')
    @yield('script')
</body>

</html>