
<?php
    $uri = service('uri');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= site_url('css/custom.css') ?>">
    <link rel="stylesheet" href="<?=site_url('lib/datatables/datatables.bundle.css')?>">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-file-archive"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ARSIP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Profil LSP
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?=(($uri->getSegment(1) == 'primary' || $uri->getSegment(1) == 'lampiran') ? 'active' : '')?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data LSP</span>
                </a>
                <div id="collapseTwo" class="collapse <?=(($uri->getSegment(1) == 'primary' || $uri->getSegment(1) == 'lampiran') ? 'show' : '')?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item <?=(($uri->getSegment(1) == 'primary') ? 'active' : '')?>" href="<?= base_url('primary'); ?>">Primary</a>
                        <a class="collapse-item" href="<?= base_url('lampiran'); ?>">Lampiran</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Mitra Kerja</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item active" href="<?= base_url('asosiasi'); ?>">Asosiasi</a>
                        <a class="collapse-item" href="<?= base_url('instansi'); ?>">Instansi Pemerintah</a>
                        <a class="collapse-item" href="<?= base_url('lembaga'); ?>">Lembaga Pendidikan</a>
                        <a class="collapse-item" href="<?= base_url('perusahaan'); ?>">Perusahaan/Industri</a>
                        <a class="collapse-item" href="<?= base_url('etc'); ?>">Etc</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('tuk'); ?>">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>T.U.K</span>
                </a>

            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PERSONIL
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Asesor</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Login Screens:</h6> -->
                        <a class="collapse-item" href="<?= base_url('asesor_in'); ?>">Asesor Internal</a>
                        <a class="collapse-item" href="<?= base_url('asesor_ex'); ?>">Asesor Eksternal</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('personil'); ?>">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Personil</span>
                </a>

            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                DATABASE
            </div>

            <li class="nav-item <?=(($uri->getSegment(1) == 'asesi' || $uri->getSegment(1) == 'surveilance') ? 'active' : '')?>">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseDatabase" aria-expanded="true" aria-controls="collapseDatabase">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Asesi</span>
                </a>
                <div id="collapseDatabase" class="collapse <?=(($uri->getSegment(1) == 'asesi' || $uri->getSegment(1) == 'surveilance') ? 'show' : '')?>" aria-labelledby="headingDatabase" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item <?=(($uri->getSegment(1) == 'asesi') ? 'active' : '')?>" href="<?= base_url('asesi'); ?>">Asesi</a>
                        <a class="collapse-item <?=(($uri->getSegment(1) == 'surveilance') ? 'active' : '')?>" href="<?= base_url('surveilance'); ?>">Data Surveilance</a>

                    </div>
                </div>
            </li>
            <div class="sidebar-heading">
                PROFIL
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('logout'); ?>">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Logout</span>
                </a>

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

                       


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->


                <?= $this->renderSection('page-content'); ?>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; NextShadow 2021</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>/public/datatables/datatables.bundle.js" type="text/javascript"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>
    <script src="<?=site_url('lib/datatables/datatables.bundle.js')?>"></script>
    <script src="<?=site_url('lib/jquery-ui/jquery-ui.min.js')?>"></script>
    <script src="<?=site_url('lib/sweetalert2/sweetalert.min.js')?>"></script>
    <script src="<?=site_url('js/dynamic-img.js')?>"></script>


    <?php $this->renderSection('js_script')?>

</body>

</html>