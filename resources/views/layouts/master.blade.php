<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('adminlte')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('adminlte')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte')}}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{asset('adminlte')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div> -->

        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @include('layouts.content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('layouts.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset('adminlte')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('adminlte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('adminlte')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('adminlte')}}/dist/js/adminlte.js"></script>

    <!-- PAGE {{asset('adminlte')}}/PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{asset('adminlte')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="{{asset('adminlte')}}/plugins/raphael/raphael.min.js"></script>
    <script src="{{asset('adminlte')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="{{asset('adminlte')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="{{asset('adminlte')}}/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('adminlte')}}/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('adminlte')}}/dist/js/pages/dashboard2.js"></script>
</body>

</html>