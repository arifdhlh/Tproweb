<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset ('trix.css') }}">
    <script type="text/javascript" src="{{ URL::asset ('trix.js') }}"></script>
    
    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display:none;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset ('style2/css/bootstrap-datetimepicker.css') }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SIBUKS - DASHBOARD</title>

    <!-- Favicons -->
    <link href="{{ URL::asset ('style/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ URL::asset ('style/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset ('style1/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset ('style1/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-briefcase-medical"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIBUKS <sup>A-4</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tampilan Web
            </div>

            <!-- Nav Item - profil -->
            <li class="nav-item {{ Request::is('dashboard/profil*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/profil">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Profil UKS</span></a>
            </li>

            <!-- Nav Item - visi misi -->
            <li class="nav-item {{ Request::is('dashboard/layanan*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/layanan">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Layanan UKS</span></a>
            </li>

            <!-- Nav Item - layanan -->
            <li class="nav-item {{ Request::is('dashboard/galeri*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/galeri">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Galeri UKS</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Database
            </div>

            <!-- Nav Item - obat -->
            <li class="nav-item {{ Request::is('dashboard/obat*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/obat">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Obat</span></a>
            </li>

            <li class="nav-item {{ Request::is('dashboard/urus*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/urus">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Pengurus</span></a>
            </li>

            <!-- Nav Item - pengunjung -->
            <li class="nav-item {{ Request::is('dashboard/kunjungan*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/kunjungan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Pengunjung</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

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
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ URL::asset ('style1/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout                                    
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('container')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Pemrograman Web A-4</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingin pergi?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika anda ingin mengakhiri sesi ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset ('style1/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset ('style1/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ URL::asset ('style1/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ URL::asset ('style1/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ URL::asset ('style1/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ URL::asset ('style1/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ URL::asset ('style1/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>