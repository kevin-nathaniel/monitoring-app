<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inspeksi Fasilitas Terminal</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js" integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Senior Manager</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Home -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Monitoring
            </div>

            <!-- Nav Item - Entry Inspeksi -->
            <li class="nav-item">
                <a class="nav-link" href="entry-inspeksi.html">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Entry Inspeksi</span></a>
            </li>

            <!-- Nav Item - Log Activity -->
            <li class="nav-item">
                <a class="nav-link" href="log-activity.html">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Log Activity Inspeksi</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Laporan Inspeksi -->
            <li class="nav-item">
                <a class="nav-link" href="laporan-inspeksi.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan Inspeksi</span></a>
            </li>

            <!-- Nav Item - Grafik -->
            <li class="nav-item">
                <a class="nav-link" href="grafik-laporan.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Grafik Laporan</span></a>
            </li>

            <!-- Nav Item - Pengaturan Bobot -->
            <li class="nav-item">
                <a class="nav-link" href="pengaturan-bobot.html">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Pengaturan Bobot</span></a>
            </li>

            <!-- Nav Item - Akses Jadwal -->
            <li class="nav-item">
                <a class="nav-link" href="akses-jadwal.html">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Akses Jadwal</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Widya Ngudi</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class="h3 mb-0 text-gray-800">Input Inspeksi Fasilitas Terminal</h3>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <!-- Inspection Form -->
                        <div class="col-xl-12 col-md-12 mb-5">
                            <div class="card mb-4">
                                    <div class="card-body">
                                            <form id="contactForm" action"" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>
                                                            Hari :
                                                            <select class="form-control" name="hari">
                                                                <option value="">-hari-</option>
                                                                <option value="Senin">Senin</option>
                                                                <option value="Selasa">Selasa</option>
                                                                <option value="Rabu">Rabu</option>
                                                                <option value="Kamis">Kamis</option>
                                                                <option value="Jumat">Jumat</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Tanggal :
                                                            <input id="datepicker" class="form-control" type="text" name="tgl" value="" placeholder="">
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>
                                                            Pilih Kendaraan:
                                                            <select class="form-control" name="kendaraan">
                                                                <option value="">-kendaraan-</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>
                                                            Waktu Inspeksi:
                                                            <br>
                                                            <input type="checkbox" name="w1" value="Y">
                                                            PAGI s/d SIANG
                                                            <br>
                                                            <input type="checkbox" name="w2" value="Y">
                                                            SIANG s/d SORE
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="text-center">
                                                    <b>INSPEKSI ENGINE OFF</b>
                                                </p>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>
                                                            Body Kendaraan :
                                                            <select class="form-control" name="kondisi">
                                                                <option value="">-kondisi-</option>
                                                                <option value="sangatbaik">SANGAT BAIK</option>
                                                                <option value="baik">BAIK</option>
                                                                <option value="layakpakai">LAYAK PAKAI</option>
                                                                <option value="rusak">RUSAK</option>
                                                                <option value="rusakparah">RUSAK PARAH</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Voltase Baterai/ACCU :
                                                            <select class="form-control" name="baterai">
                                                                <option value="">-voltase-</option>
                                                                <option value="25">SANGAT BAIK</option>
                                                                <option value="50">BAIK</option>
                                                                <option value=">50">>50</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Cek Air ACCU :
                                                            <select class="form-control" name="air">
                                                                <option value="">-batas air-</option>
                                                                <option value="batasbawah">BATAS BAWAH</option>
                                                                <option value="batasnormal">BATAS NORMAL</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Oli Mesin :
                                                            <select class="form-control" name="oli">
                                                                <option value="">-batas oli-</option>
                                                                <option value="batasbawah">BATAS BAWAH</option>
                                                                <option value="batasnormal">BATAS NORMAL</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>
                                                            Oli Gardan :
                                                            <select class="form-control" name="oligardan">
                                                                <option value="">-oli gardan-</option>
                                                                <option value="baik">BAIK</option>
                                                                <option value="buruk">BURUK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Filter Oli :
                                                            <select class="form-control" name="olifilter">
                                                                <option value="">-filter oli-</option>
                                                                <option value="baik">KONDISI BAIK</option>
                                                                <option value="buruk">KONDISI BURUK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Filter Bahan Bakar :
                                                            <select class="form-control" name="bahanbakar">
                                                                <option value="">-filter bahan bakar-</option>
                                                                <option value="baik">KONDISI BAIK</option>
                                                                <option value="buruk">KONDISI BURUK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Exhaust Pipe :
                                                            <select class="form-control" name="exhaustpipe">
                                                                <option value="">-kondisi-</option>
                                                                <option value="baik">KONDISI BAIK</option>
                                                                <option value="buruk">KONDISI BURUK</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>
                                                            Minyak Rem :
                                                            <select class="form-control" name="minyakrem">
                                                                <option value="">-keadaan-</option>
                                                                <option value="ada">ADA</option>
                                                                <option value="tidakada">TIDAK ADA</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                                </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p>
                                                            Foto Kendaraan
                                                            <input type="file" class="form-control-file" id="">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p>
                                                            Tanda Tangan Petugas
                                                            <div class="wrapper">
                                                            <canvas id="signature-pad" width="200 height=200"></canvas>
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a href="entry-inspeksi.html" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Save and Submit</a>
                                                        </div>
                                                        <div class="col-md-4">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                                class="fas fa-download fa-sm text-white-50"></i> Generate Report and Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                            </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Airport Equipment 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
