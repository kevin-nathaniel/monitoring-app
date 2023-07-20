<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inspeksi Mobil PK</title>

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset ('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset ('css/sb-admin-2.min.css') }}" rel="stylesheet">

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
                        <h3 class="h3 mb-0 text-gray-800">Edit Inspeksi Mobil PK</h3>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <!-- Inspection Form -->
                        <div class="col-xl-12 col-md-12 mb-5">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form action="/dashboard/damkar/{{ $damkar->id }}" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    Hari :
                                                    <select class="form-control" name="hari">
                                                        <option value="" disabled selected>Silahkan Pilih Hari</option>
                                                        <option value="Senin" {{ $damkar->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                                                        <option value="Selasa" {{ $damkar->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                                        <option value="Rabu" {{ $damkar->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                                        <option value="Kamis" {{ $damkar->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                                        <option value="Jumat" {{ $damkar->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                                    </select>
                                                </p>
                                                <p>
                                                    Tanggal :
                                                    <input id="datepicker" class="form-control" type="date" name="tgl" value="{{ old('tgl', date ('Y-m-d', strtotime($damkar->tgl))) }}">
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    Pilih Kendaraan:
                                                    <select class="form-control" name="kendaraan">
                                                        <option value="" disabled selected>Silahkan Pilih Kendaraan</option>
                                                        <option value="F2 Kanglim 2012" {{ $damkar->kendaraan == 'F2 Kanglim 2012' ? 'selected' : '' }}>F2 KANGLIM 2012</option>
                                                        <option value="ARFF - A4 Ambulance Toyota Hiace" {{ $damkar->kendaraan == 'ARFF - A4 Ambulance Toyota Hiace' ? 'selected' : '' }}>ARFF - A4 AMBULANCE TOYOTA HIACE</option>
                                                        <option value="Tracktor TR-8 Ferguson" {{ $damkar->kendaraan == 'Tracktor TR-8 Ferguson' ? 'selected' : '' }}>TRACKTOR TR-8 MESSEY FERGUSON</option>
                                                        <option value="Toyota Forklift" {{ $damkar->kendaraan == 'Toyota Forklift' ? 'selected' : '' }}>TOYOTA FORKLIFT</option>
                                                        <option value="John Deere Rubber Deposit Removal" {{ $damkar->kendaraan == 'John Deere Rubber Deposit Removal' ? 'selected' : '' }}>JOHN DEERE RUBBER DEPOSIT REMOVAL</option>
                                                        <option value="F3 Ziegler 2004" {{ $damkar->kendaraan == 'F3 Ziegler 2004' ? 'selected' : '' }}>F3 ZIEGLER 2004</option>
                                                        <option value="Simon Gloster Saro" {{ $damkar->kendaraan == 'Simon Gloster Saro' ? 'selected' : '' }}>SIMON GLOSTER SARO</option>
                                                        <option value="Oshkosh Striker" {{ $damkar->kendaraan == 'Oshkosh Striker' ? 'selected' : '' }}>OSHKOSH STRIKER</option>
                                                    </select>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    Waktu Inspeksi:
                                                    <select class="form-control" name="waktu">
                                                        <option value="" disabled selected>Silahkan Pilih Waktu</option>
                                                        <option value="Pagi s/d Siang" {{ $damkar->waktu == 'Pagi s/d Siang' ? 'selected' : '' }}>Pagi s/d Siang</option>
                                                        <option value="Siang s/d Sore" {{ $damkar->waktu == 'Siang s/d Sore' ? 'selected' : '' }}>Siang s/d Sore</option>
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
                                                        <option value="Sangat Baik" {{ $damkar->body == 'Sangat Baik' ? 'selected' : '' }}>SANGAT BAIK</option>
                                                        <option value="Baik" {{ $damkar->body == 'Baik' ? 'selected' : '' }}>BAIK</option>
                                                        <option value="Layak Pakai" {{ $damkar->body == 'Layak Pakai' ? 'selected' : '' }}>LAYAK PAKAI</option>
                                                        <option value="Rusak" {{ $damkar->body == 'Rusak' ? 'selected' : '' }}>RUSAK</option>
                                                        <option value="Rusak Parah" {{ $damkar->body == 'Rusak Parah' ? 'selected' : '' }}>RUSAK PARAH</option>
                                                    </select>
                                                </p>
                                                <p>
                                                    Voltase Baterai/ACCU :
                                                    <select class="form-control" name="voltase">
                                                        <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                        <option value="100 - 90" {{ $damkar->voltase == '100 - 90' ? 'selected' : '' }}>100 - 90</option>
                                                        <option value="Baik" {{ $damkar->voltase == 'Baik' ? 'selected' : '' }}>BAIK</option>
                                                        <option value="<50" {{ $damkar->voltase == '<50' ? 'selected' : '' }}> <50 </option>
                                                    </select>
                                                </p>
                                                <p>
                                                    Cek Air ACCU :
                                                    <select class="form-control" name="accu">
                                                        <option value="" disabled selected>Silahkan Pilih Batas</option>
                                                        <option value="Batas Bawah" {{ $damkar->accu == 'Batas Bawah' ? 'selected' : '' }}>BATAS BAWAH</option>
                                                        <option value="Batas Normal" {{ $damkar->accu == 'Batas Normal' ? 'selected' : '' }}>BATAS NORMAL</option>
                                                    </select>
                                                </p>
                                                <p>
                                                    Oli Mesin :
                                                    <select class="form-control" name="oli">
                                                        <option value="" disabled selected>Silahkan Pilih Batas</option>
                                                        <option value="Batas Bawah" {{ $damkar->oli == 'Batas Bawah' ? 'selected' : '' }}>BATAS BAWAH</option>
                                                        <option value="Batas Normal" {{ $damkar->oli == 'Batas Normal' ? 'selected' : '' }}>BATAS NORMAL</option>
                                                    </select>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    Oli Gardan :
                                                    <select class="form-control" name="gardan">
                                                        <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                        <option value="Kondisi Baik" {{ $damkar->gardan == 'Kondisi Baik' ? 'selected' : '' }}>KONDISI BAIK</option>
                                                        <option value="Kondisi Buruk" {{ $damkar->gardan == 'Kondisi Buruk' ? 'selected' : '' }}>KONDISI BURUK</option>
                                                    </select>
                                                </p>
                                                <p>
                                                    Filter Oli :
                                                    <select class="form-control" name="filter_oli">
                                                        <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                        <option value="Kondisi Baik" {{ $damkar->filter_oli == 'Kondisi Baik' ? 'selected' : '' }}>KONDISI BAIK</option>
                                                        <option value="Kondisi Buruk" {{ $damkar->filter_oli == 'Kondisi Buruk' ? 'selected' : '' }}>KONDISI BURUK</option>
                                                    </select>
                                                </p>
                                                <p>
                                                    Filter Bahan Bakar :
                                                    <select class="form-control" name="filter_bahan_bakar">
                                                        <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                        <option value="Kondisi Baik" {{ $damkar->filter_bahan_bakar == 'Kondisi Baik' ? 'selected' : '' }}>KONDISI BAIK</option>
                                                        <option value="Kondisi Buruk" {{ $damkar->filter_bahan_bakar == 'Kondisi Buruk' ? 'selected' : '' }}>KONDISI BURUK</option>
                                                    </select>
                                                </p>
                                                <p>
                                                    Exhaust Pipe :
                                                    <select class="form-control" name="exhaust">
                                                        <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                        <option value="Kondisi Baik" {{ $damkar->exhaust == 'Kondisi Baik' ? 'selected' : '' }}>KONDISI BAIK</option>
                                                        <option value="Kondisi Buruk" {{ $damkar->exhaust == 'Kondisi Buruk' ? 'selected' : '' }}>KONDISI BURUK</option>
                                                    </select>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    Minyak Rem :
                                                    <select class="form-control" name="minyak">
                                                        <option value="" disabled selected>Silahkan Pilih Kondisi</option>
                                                        <option value="Ada" {{ $damkar->minyak == 'Ada' ? 'selected' : '' }}>ADA</option>
                                                        <option value="Tidak Ada" {{ $damkar->minyak == 'Tidak Ada' ? 'selected' : '' }}>TIDAK ADA</option>
                                                    </select>
                                                </p>
                                            </div>
                                        </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="image" class="form-label">Foto Kendaraan</label>
                                                    <input type="hidden" name="oldimage" value="{{ $damkar->foto }}">
                                                    @if ($damkar->foto)
                                                        <img src="{{ URL::asset('storage/' . $damkar->foto)}}" class="img-fluid"><br><br>
                                                    @else
                                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    @endif

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
                                                    <a href="/dashboard/log-damkar/" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Batal</a>
                                                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Save</button>
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                                {{-- <div class="col-md-4">
                                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                        class="fas fa-download fa-sm text-white-50"></i> Generate Report and Save</a>
                                                </div> --}}
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
