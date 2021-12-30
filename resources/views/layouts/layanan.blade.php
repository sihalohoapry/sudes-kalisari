<!DOCTYPE html>
<html lang="en">

@auth

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan | Sudes Kalisari</title>

    @include('includes.style-layanan')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.css" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/images/logo_lampung_selatan.png" alt="" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
            </ul>

        </nav>

        <!-- Main Sidebar Container -->
        @include('includes.nav-layanan')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>Copyright &copy; 2021 Sudes Kalisari</strong>
            All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
    @stack('prepend-script')
    @include('includes.script-layanan')
    @stack('addon-script')
</body>

@else

<div style="border: solid;">
    <h2 style="text-align: center" : center">Oooops anda harus login terlebih dahulu</h2>
</div>

@endauth

</html>