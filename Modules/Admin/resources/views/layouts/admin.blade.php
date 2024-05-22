@include('admin::components.header')

<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    @include('admin::components.navbar')
<!-- Main Sidebar Container -->

    @include('admin::components.menu')

<!-- Content Wrapper. Contains page content -->
    @yield("content")
    <!-- /.content-wrapper -->
@include('admin::components.footer')

