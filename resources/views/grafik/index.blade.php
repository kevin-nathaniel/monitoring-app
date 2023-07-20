<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grafik Laporan</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
            ['Label',                                             'Jumlah'],
            ['Belum Siap Digunakan Atau Rusak',         {{$countketrusak}}],
            ['Siap Digunakan Tapi Rawan',               {{$countketrawan}}],
            ['Siap Digunakan Dan Tidak Rusak',          {{$countketsiap}}]
            ]);

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data);
        }
    </script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

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
                    <h1 class="h3 mb-2 text-gray-800">Grafik Kerusakan Fasilitas Airport Equipment</h1>
                    <p class="mb-4">Berikut grafik laporan kerusakan fasilitas yang terjadi untuk Section Airport Equipment </p>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-7 order-lg-1">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <form method="post" action="/dashboard/grafik">
                                        @csrf
                                        <div class="pl-lg-1">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="">Kesiapan Unit:</label>
                                                        <input min="0" max="300" type="number" id="number" class="form-control" name="nilai"  placeholder="Silahkan Input Nilai">
                                                    </div>
                                                    <button type="submit" class="btn btn-success text-center">Submit</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Display the keterangan based on input value -->
                                        <div class="pl-lg-1">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <hr>
                                                        <label class="form-control-label" for="keterangan">Keterangan:</label>
                                                        <input type="text" id="keterangan" class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-5 col-lg-5">
                            <div class="card shadow mb-4">
                                <div id="piechart" style="width: 600px; height: 500px;"></div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    Persentase Kesiapan Unit
                                </div>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#number').on('input', function() {
                var nilai = $(this).val();
                var keterangan = '';

                if (nilai >= 0 && nilai <= 50) {
                    keterangan = 'Belum Siap Digunakan Atau Rusak';
                } else if (nilai > 50 && nilai <= 100) {
                    keterangan = 'Siap Digunakan Tapi Rawan';
                } else {
                    keterangan = 'Siap Digunakan Dan Tidak Rusak';
                }

                $('#keterangan').val(keterangan);
            });
        });
    </script>

</body>

</html>
