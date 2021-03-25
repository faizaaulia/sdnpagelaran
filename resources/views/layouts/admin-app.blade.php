<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') - Admin SDN Pagelaran</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb-admin/css/font-awesome-all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    @stack('styles')
    <style>
        label { color: rgb(54, 54, 54); }
        .form-control {
            color: #545458;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-text mx-3">SDN 1 Pagelaran</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ request()->get('type') == 'berita' ? 'active' : '' }}">
                <a class="nav-link {{ request()->get('type') == 'berita' ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="{{ request()->get('type') == 'berita' ? 'true' : 'false' }}" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Berita</span>
                </a>
                <div id="collapseOne" class="collapse {{ request()->get('type') == 'berita' ? 'show' : '' }}" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->get('type') == 'berita' && Request::segment(2) == 'tambah' ? 'active' : '' }}" href="{{ route('create-post', ['type' => 'berita']) }}">Tambah Berita</a>
                        <a class="collapse-item {{ request()->get('type') == 'berita' && Request::segment(2) == 'lihat' ? 'active' : '' }}" href="{{ route('show-post', ['type' => 'berita']) }}">Daftar Berita</a>
                    </div>
                </div>
            </li>
            <li class="nav-item {{ request()->get('type') == 'pengumuman' ? 'active' : '' }}">
                <a class="nav-link {{ request()->get('type') == 'pengumuman' ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="{{ request()->get('type') == 'pengumuman' ? 'true' : 'false' }}" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-bullhorn"></i>
                    <span>Pengumuman</span>
                </a>
                <div id="collapseTwo" class="collapse {{ request()->get('type') == 'pengumuman' ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->get('type') == 'pengumuman' && Request::segment(2) == 'tambah' ? 'active' : '' }}" href="{{ route('create-post', ['type' => 'pengumuman']) }}">Tambah Pengumuman</a>
                        <a class="collapse-item {{ request()->get('type') == 'pengumuman' && Request::segment(2) == 'lihat' ? 'active' : '' }}" href="{{ route('show-post', ['type' => 'pengumuman']) }}">Daftar Pengumuman</a>
                    </div>
                </div>
            </li>

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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('edit-profile') }}" id="btn-profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>
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
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span class="text-muted">2021 © Copyright SD Negeri 1 Pagelaran. All rights Reserved.</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin untuk Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Keluar" di bawah untuk mengakhiri sesi.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 500px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileLabel">Edit Profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="editProfile-modal-detail">
                    <div class="modal-body">
                        <div>
                            <form action="{{ route('update-profile') }}" method="post" class="update-profile-form">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>  
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password Baru</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password Baru">
                                </div>
                                <div class="form-group">
                                    <label for="confirm-password">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Konfirmasi Password">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-sm btn-secondary shadow-sm" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-sm btn-primary shadow-sm">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/app/jquery.min.js') }}"></script>
    {{-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    --}}
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sb-admin/js/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb-admin/js/sb-admin-2.min.js') }}"></script>

    <script src="{{ asset('js/app/admin-profile.min.js') }}"></script>

    @stack('scripts')

</body>

</html>
