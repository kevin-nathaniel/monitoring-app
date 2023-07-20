<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log Activity Terminal</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class="h3 mb-0 text-gray-800">Log Activity 3</h3>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Terminal</h6>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Hari</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Fasilitas</th>
                                            <th>Waktu</th>
                                            <th>Running Condition</th>
                                            <th>Comb</th>
                                            <th>Emergency Key & Key Switch</th>
                                            <th>Hand Rail Guard Switch</th>
                                            <th>Step & Pallet</th>
                                            <th>Demercation</th>
                                            <th>Drive Roller</th>
                                            <th>Pressure Roller</th>
                                            <th>Drive Wheel</th>
                                            <th>Guide Roller</th>
                                            <th>Chain Drive</th>
                                            <th>Chain Sprocket</th>
                                            <th>Hand Rail Driving Equipment</th>
                                            <th>Skritguard Switch</th>
                                            <th>Plate Chain</th>
                                            <th>Roller Axle</th>
                                            <th>Sprocket Gear & Balok Bantalan</th>
                                            <th>Machine Room Condition</th>
                                            <th>Kondisi Traksi Mesin</th>
                                            <th>Oil Seal</th>
                                            <th>Operational</th>
                                            <th>Magnetic Brake</th>
                                            <th>Driving Chain Follower</th>
                                            <th>Control Panel</th>
                                            <th>Automatic Start & Stop</th>
                                            <th>Hand Rail Lighting</th>
                                            <th>Monitoring System</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($terminal as $konten)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $konten->hari }}</td>
                                            <th>{{ $konten->tgl }}</th>
                                            <th>{{ $konten->nama_aset }}</th>
                                            <th>{{ $konten->waktu }}</th>
                                            <th>{{ $konten->running_condition }}</th>
                                            <th>{{ $konten->comb }}</th>
                                            <th>{{ $konten->emergency_key_and_key_switch }}</th>
                                            <th>{{ $konten->steppallet }}</th>
                                            <th>{{ $konten->demercation }}</th>
                                            <th>{{ $konten->driveroller }}</th>
                                            <th>{{ $konten->pressureroller }}</th>
                                            <th>{{ $konten->drivewheel }}</th>
                                            <th>{{ $konten->guideroller }}</th>
                                            <th>{{ $konten->chain_drive }}</th>
                                            <th>{{ $konten->chain_sprocket }}</th>
                                            <th>{{ $konten->handrail_driving_equipment }}</th>
                                            <th>{{ $konten->skritguard_switch }}</th>
                                            <th>{{ $konten->plate_chain }}</th>
                                            <th>{{ $konten->roller_axle }}</th>
                                            <th>{{ $konten->push_button }}</th>
                                            <th>{{ $konten->sprocket_gear_dan_balokbantalan }}</th>
                                            <th>{{ $konten->machineroom_condition }}</th>
                                            <th>{{ $konten->kondisi_traksi_mesin }}</th>
                                            <th>{{ $konten->oil_seal }}</th>
                                            <th>{{ $konten->operational }}</th>
                                            <th>{{ $konten->magnetic_brake }}</th>
                                            <th>{{ $konten->driving_chain_follower }}</th>
                                            <th>{{ $konten->control_panel }}</th>
                                            <th>{{ $konten->automatic_start_stop }}</th>
                                            <th>{{ $konten->handrail_lighting }}</th>
                                            <th>{{ $konten->monitoring_system }}</th>
                                            <td>
                                                <a href="/dashboard/log-terminal/{{ $konten->id }}/edit" class="btn btn-success"><i class="far fa-edit" style="color:white" ></i></a>
                                                <form action="/dashboard/log-terminal/{{ $konten->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger " onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash" style="color:white height: 16px; width: 18px;"></i></a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

</body>
</html>
