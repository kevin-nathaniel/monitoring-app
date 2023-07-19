<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset ('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset ('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
                <div class="card mb-0">
                <div class="card-body">
                    <a href="{{ url('login') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                    <img src="{{ asset('img/angkasa-pura.png') }}" style= "width: 240px;" alt="logo-img">
                    </a>
                    <p class="text-center">HEAVY EQUIPMENT</p>
                    <form role="form" action="/login" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="username" class="form-control form-control-user" placeholder="Username" aria-label="Username" name="uname" id="uname" id="uname" autofocus required value="{{ old('uname') }}">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" placeholder="Password" aria-label="Password" name="password" id="password" id="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Login
                    </button>
                    </form>

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset ('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
