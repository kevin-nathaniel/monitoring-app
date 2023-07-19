<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset ('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center {{ Request::is('dashboard/profile*') ? 'active' : '' }}" href="/dashboard/profile">
            <div class="sidebar-brand-text mx-3">{{ auth()->User()->role }}</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Home -->
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="/">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Home</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        @can('super')
        <!-- Heading -->
        <div class="sidebar-heading">
            Users
        </div>

        <!-- Nav Item - User -->
        <li class="nav-item {{ Request::is('dashboard/account*') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard/account">
                <i class="fas fa-fw fa-user"></i>
                <span>Account</span></a>
        </li>
        @endcan

        @canany(['manager', 'senior', 'staff', 'teknisi'])
        <!-- Heading -->
        <div class="sidebar-heading">
            Monitoring
        </div>

        <!-- Nav Item - Entry Inspeksi -->
        <li class="nav-item {{ Request::is('dashboard/inspeksi*') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard/inspeksi">
                <i class="fas fa-fw fa-cog"></i>
                <span>Entry Inspeksi</span>
            </a>
        </li>

        <!-- Nav Item - Log Activity -->
        <li class="nav-item {{ Request::is('dashboard/log*') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard/log">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Log Activity</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Data
        </div>

        <!-- Nav Item - Laporan Inspeksi -->
        <li class="nav-item {{ Request::is('dashboard/laporan*') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard/laporan">
                <i class="fas fa-fw fa-table"></i>
                <span>Laporan Inspeksi</span>
            </a>
        </li>

        <!-- Nav Item - Grafik -->
        <li class="nav-item {{ Request::is('dashboard/grafik*') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard/grafik">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Grafik Laporan</span>
            </a>
        </li>

        <!-- Nav Item - Pengaturan Bobot -->
        <li class="nav-item {{ Request::is('dashboard/bobot*') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard/bobot">
                <i class="fas fa-fw fa-clipboard-list"></i>
                <span>Pengaturan Bobot</span>
            </a>
        </li>

        <!-- Nav Item - Akses Jadwal -->
        <li class="nav-item {{ Request::is('dashboard/jadwal*') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard/jadwal">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Akses Jadwal</span>
            </a>
        </li>
        @endcan

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    </ul>
    <!-- End of Sidebar -->





    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset ('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ URL::asset ('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ URL::asset ('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ URL::asset ('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ URL::asset ('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ URL::asset ('js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>
