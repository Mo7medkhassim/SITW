<!DOCTYPE html>
<html>

<head>
    <!-- Head -->
    @include('includes/dashboard/head')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('includes/dashboard/navbar')

        <!-- Sidebar -->
        @include('includes/dashboard/sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper p-5">


            <!-- page content -->
            @yield('content')

        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        @include('includes/dashboard/footer')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

   
   
    @yield('js')
</body>

</html>