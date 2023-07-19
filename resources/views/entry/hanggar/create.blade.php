<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inspeksi Alat Hanggar</title>

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset ('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset ('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js" integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" id="signature-pad"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')

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
                        <!-- Nav Item - User Information -->
                        @include('layouts.dropdown')
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class="h3 mb-0 text-gray-800">Input Inspeksi Alat Hanggar</h3>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <!-- Inspection Form -->
                        <div class="col-xl-12 col-md-12 mb-5">
                            <div class="card mb-4">
                                    <div class="card-body">
                                            <form id="contactForm" action="/dashboard/inspeksi/hanggar" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>
                                                            Hari :
                                                            <select class="form-control" name="hari" required>
                                                                <option value="" disabled selected>Silahkan Pilih Hari</option>
                                                                <option value="Senin">Senin</option>
                                                                <option value="Selasa">Selasa</option>
                                                                <option value="Rabu">Rabu</option>
                                                                <option value="Kamis">Kamis</option>
                                                                <option value="Jumat">Jumat</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Tanggal :
                                                            <input id="datepicker" class="form-control" type="date" name="tgl" required>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>
                                                            Pilih Kendaraan:
                                                            <select class="form-control" name="kendaraan" required>
                                                                <option value="" disabled selected>Silahkan Pilih Kendaraan</option>
                                                                <option value="Supra">Supra</option>
                                                                <option value="Honda">Honda</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>
                                                            Waktu Inspeksi:
                                                            <select class="form-control" name="waktu" required>
                                                                <option value="" disabled selected>Silahkan Pilih Waktu</option>
                                                                <option value="Pagi s/d Siang">Pagi s/d Siang</option>
                                                                <option value="Siang s/d Sor">Siang s/d Sore</option>
                                                            </select>
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
                                                            <select class="form-control" name="body">
                                                                <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="Sangat Baik">SANGAT BAIK</option>
                                                                <option value="Baik">BAIK</option>
                                                                <option value="Layak Pakai">LAYAK PAKAI</option>
                                                                <option value="Rusak">RUSAK</option>
                                                                <option value="Rusak Parah">RUSAK PARAH</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Voltase Baterai/ACCU :
                                                            <select class="form-control" name="voltase">
                                                                <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="100 - 90">100 - 90</option>
                                                                <option value="Baik">BAIK</option>
                                                                <option value="<50"> <50 </option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Cek Air ACCU :
                                                            <select class="form-control" name="accu">
                                                                <option value="" disabled selected>Silahkan Pilih Batas</option>
                                                                <option value="batasbawah">BATAS BAWAH</option>
                                                                <option value="batasnormal">BATAS NORMAL</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Oli Mesin :
                                                            <select class="form-control" name="oli">
                                                                <option value="" disabled selected>Silahkan Pilih Batas</option>
                                                                <option value="batasbawah">BATAS BAWAH</option>
                                                                <option value="batasnormal">BATAS NORMAL</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>
                                                            Oli Gardan :
                                                            <select class="form-control" name="gardan">
                                                                <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="baik">BAIK</option>
                                                                <option value="buruk">BURUK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Filter Oli :
                                                            <select class="form-control" name="filter_oli">
                                                                <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="baik">KONDISI BAIK</option>
                                                                <option value="buruk">KONDISI BURUK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Filter Bahan Bakar :
                                                            <select class="form-control" name="filter_bahan_bakar">
                                                                <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="baik">KONDISI BAIK</option>
                                                                <option value="buruk">KONDISI BURUK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Exhaust Pipe :
                                                            <select class="form-control" name="exhaust">
                                                                <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="baik">KONDISI BAIK</option>
                                                                <option value="buruk">KONDISI BURUK</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>
                                                            Minyak Rem :
                                                            <select class="form-control" name="minyak">
                                                                <option value="" disabled selected>Silahkan Pilih Kondisi</option>
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
                                                            <input type="file" class="form-control-file" name="foto">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    {{-- <hr> --}}
                                                    {{-- <div class="row">
                                                        <div class="col-md-4">
                                                            <p>
                                                            Tanda Tangan Petugas
                                                            <div class="wrapper">
                                                            <canvas id="signature-pad" width="200 height=200"></canvas>
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </div> --}}
                                                    <hr>
                                                    <div class="row ">
                                                        <div class="col-md-12 text-right">
                                                            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Confirm</button>
                                                        </div>
                                                        <div class="col-md-4">
                                                        </div>
                                                        <!-- <div class="col-md-4">
                                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                                class="fas fa-download fa-sm text-white-50"></i> Generate Report and Save</a>
                                                        </div> -->
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
            @include('layouts.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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
