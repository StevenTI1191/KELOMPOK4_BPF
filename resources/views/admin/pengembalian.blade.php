<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template -->
    <link href="../assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.buku') }}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Buku & Modul</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- List -->
            <div class="sidebar-heading">
                List Buku & Modul
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pengajuan') }}">
                    <i class="fas fa-fw fa-book-reader"></i>
                    <span>Pengajuan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.peminjaman') }}">
                    <i class="fas fa-fw fa-bookmark"></i>
                    <span>Peminjaman</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.pengembalian') }}">
                    <i class="fas fa-fw fa-book-open"></i>
                    <span>Pengembalian</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Riwayat -->
            <div class="sidebar-heading">
                Riwayat Buku & Modul
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.riwayatPengajuan')}}">
                    <i class="fas fa-fw fa-book-reader"></i>
                    <span>Pengajuan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.riwayatPeminjaman')}}">
                    <i class="fas fa-fw fa-bookmark"></i>
                    <span>Peminjaman</span></a>
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

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="../assets/admin/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pengembalian Buku & Modul</h1>
                    </div>

                    <!-- Content -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">List Pengembalian Buku & Modul</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Peminjam</th>
                                            <th>NIM/NIP</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Jenis</th>
                                            <th>Judul Buku</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Peminjam</th>
                                            <th>NIM</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Jenis</th>
                                            <th>Judul Buku</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Andi Saputra</td>
                                            <td>12345678</td>
                                            <td>2024-01-10</td>
                                            <td>Buku</td>
                                            <td>Panduan Belajar Python</td>
                                            <td><span class="badge bg-success text-light">Sudah</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Budi Santoso</td>
                                            <td>87654321</td>
                                            <td>2024-01-12</td>
                                            <td>Modul</td>
                                            <td>Mastering Laravel</td>
                                            <td><span class="badge bg-danger text-light">Belum</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Citra Dewi</td>
                                            <td>11223344</td>
                                            <td>2024-01-15</td>
                                            <td>Buku</td>
                                            <td>Database MySQL</td>
                                            <td><span class="badge bg-success text-light">Sudah</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Dodi Kurniawan</td>
                                            <td>55667788</td>
                                            <td>2024-01-17</td>
                                            <td>Modul</td>
                                            <td>Android Programming</td>
                                            <td><span class="badge bg-danger text-light">Belum</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Eva Putri</td>
                                            <td>99887766</td>
                                            <td>2024-01-20</td>
                                            <td>Buku</td>
                                            <td>HTML & CSS</td>
                                            <td><span class="badge bg-success text-light">Sudah</span></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Fajar Maulana</td>
                                            <td>12344321</td>
                                            <td>2024-01-22</td>
                                            <td>Modul</td>
                                            <td>JavaScript Basics</td>
                                            <td><span class="badge bg-danger text-light">Belum</span></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Gita Anggraini</td>
                                            <td>44556677</td>
                                            <td>2024-01-25</td>
                                            <td>Buku</td>
                                            <td>React.js Guide</td>
                                            <td><span class="badge bg-success text-light">Sudah</span></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Hendra Setiawan</td>
                                            <td>88776655</td>
                                            <td>2024-01-27</td>
                                            <td>Modul</td>
                                            <td>Vue.js for Beginners</td>
                                            <td><span class="badge bg-danger text-light">Belum</span></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Ika Suryani</td>
                                            <td>99886644</td>
                                            <td>2024-01-29</td>
                                            <td>Buku</td>
                                            <td>Panduan Java</td>
                                            <td><span class="badge bg-success text-light">Sudah</span></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Joko Susanto</td>
                                            <td>55669988</td>
                                            <td>2024-01-31</td>
                                            <td>Modul</td>
                                            <td>Kotlin for Android</td>
                                            <td><span class="badge bg-danger text-light">Belum</span></td>
                                        </tr>
                                        <!-- Tambahkan 10 baris lagi sesuai pola yang sama -->
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
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kelompok 4</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page level custom scripts -->
    <script src="../assets/admin/js/demo/datatables-demo.js"></script>

</body>

</html>
