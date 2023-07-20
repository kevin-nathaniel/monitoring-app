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
                                            <form id="contactForm" action="/dashboard/inspeksi/hanggar" method="post" enctype="multipart/form-data">
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
                                                            Pilih Jenis Unit:
                                                            <select class="form-control" name="nama" required>
                                                                <option value="" disabled selected>Silahkan Pilih Jenis Unit</option>
                                                                <option value="Kompresor">Kompresor</option>
                                                                <option value="Crane">Crane</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>
                                                            Waktu Inspeksi:
                                                            <select class="form-control" name="waktu" required>
                                                                <option value="" disabled selected>Silahkan Pilih Waktu</option>
                                                                <option value="Pagi s/d Siang">Pagi s/d Siang</option>
                                                                <option value="Siang s/d Sore">Siang s/d Sore</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="text-center">
                                                    <b>INSPEKSI KONDISI BAGIAN ASET</b>
                                                </p>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>
                                                            Oli Kompresor :
                                                            <select class="form-control" name="oli_kompresor">
                                                                <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="Sangat Baik">SANGAT BAIK</option>
                                                                <option value="Baik">BAIK</option>
                                                                <option value="Tidak Baik">TIDAK BAIK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Vanbelt :
                                                            <select class="form-control" name="vanbelt">
                                                            <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="Sangat Baik">SANGAT BAIK</option>
                                                                <option value="Baik">BAIK</option>
                                                                <option value="Tidak Baik">TIDAK BAIK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Tabung Kompresor :
                                                            <select class="form-control" name="tabung_kompresor">
                                                            <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="Sangat Baik">SANGAT BAIK</option>
                                                                <option value="Baik">BAIK</option>
                                                                <option value="Tidak Baik">TIDAK BAIK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Safety Value :
                                                            <select class="form-control" name="safety_value">
                                                            <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="Sangat Baik">SANGAT BAIK</option>
                                                                <option value="Baik">BAIK</option>
                                                                <option value="Tidak Baik">TIDAK BAIK</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>
                                                            Kontaktor :
                                                            <select class="form-control" name="kontaktor">
                                                            <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="Sangat Baik">SANGAT BAIK</option>
                                                                <option value="Baik">BAIK</option>
                                                                <option value="Tidak Baik">TIDAK BAIK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Push Button :
                                                            <select class="form-control" name="push_button">
                                                            <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="Sangat Baik">SANGAT BAIK</option>
                                                                <option value="Baik">BAIK</option>
                                                                <option value="Tidak Baik">TIDAK BAIK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Line :
                                                            <select class="form-control" name="line">
                                                            <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="Sangat Baik">SANGAT BAIK</option>
                                                                <option value="Baik">BAIK</option>
                                                                <option value="Tidak Baik">TIDAK BAIK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Chain :
                                                            <select class="form-control" name="chain">
                                                            <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="Sangat Baik">SANGAT BAIK</option>
                                                                <option value="Baik">BAIK</option>
                                                                <option value="Tidak Baik">TIDAK BAIK</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>
                                                            Grease :
                                                            <select class="form-control" name="grease">
                                                            <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="Sangat Baik">SANGAT BAIK</option>
                                                                <option value="Baik">BAIK</option>
                                                                <option value="Tidak Baik">TIDAK BAIK</option>
                                                            </select>
                                                        </p>
                                                        <p>
                                                            Kabel :
                                                            <select class="form-control" name="kabel">
                                                            <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                                <option value="Sangat Baik">SANGAT BAIK</option>
                                                                <option value="Baik">BAIK</option>
                                                                <option value="Tidak Baik">TIDAK BAIK</option>
                                                            </select>
                                                        </p>
                                                    </div>
                                                </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="image" class="form-label">Foto Unit</label>
                                                            <input type="file" class="form-control-file" name="foto">
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-3 t  ext-center ">
                                                            <div class="">
                                                                <p>Tanda Tangan Petugas</p>
                                                            </div>
                                                            <div class="" >
                                                                <image style="height: 160px; width: 160px;" src="{{ asset('img/ttd-rahman.png') }}"></image>
                                                            </div>
                                                            <div class="">
                                                                <p>Rahman</p>
                                                            </div>
                                                </div>
                                            </div>
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
