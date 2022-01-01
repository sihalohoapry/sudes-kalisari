<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

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
            </ul>

            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item mr-4">
                    <i class="fas fa-user-circle mr-2"></i>
                    {{ Auth::user()->name }}

                </li>

            </ul>

        </nav>

        <!-- Main Sidebar Container -->
        @include('includes.nav-admin')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <footer class="main-footer">
        <div class="col-12 text-center">
            <strong>Copyright &copy; 2021 Sudes Kalisari</strong>
            All rights reserved.
        </div>
        <div class="col-12 text-center">
            <p >Kontak Person <span class="text-dark">0812-0000-1111</span></p>
        </div>
        </footer>
    </div>
    <!-- ./wrapper -->
    @stack('prepend-script')
    @include('includes.script-layanan')
    @stack('addon-script')
</body>

</html>