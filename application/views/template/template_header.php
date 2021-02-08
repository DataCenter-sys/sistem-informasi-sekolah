<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&family=Montserrat&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= site_url('plugins/fontawesome-free/css/all.min.css'); ?>">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= site_url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= site_url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= site_url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">

    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= site_url('plugins/daterangepicker/daterangepicker.css'); ?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= site_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= site_url('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= site_url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= site_url('plugins/select2/css/select2.min.css'); ?>">
    <link rel="stylesheet" href="<?= site_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?= site_url('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css'); ?>">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="<?= site_url('plugins/bs-stepper/css/bs-stepper.min.css'); ?>">

    <!-- dropzonejs -->
    <link rel="stylesheet" href="<?= site_url('plugins/dropzone/min/dropzone.min.css'); ?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url('assets/css/adminlte.min.css'); ?>">
    <style>
        .modal-dialog {
            overflow-y: initial !important;
        }

        .modal-body {
            height: 80vh;
            overflow-y: auto;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <div class="badge">
                    <h3>Wellcome <span style="text-transform:uppercase"><?= $username; ?></span> </h3>
                </div>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-sm btn-outline-danger" href="<?= site_url('auth/logout') ?>" style="font-size: 12px !important;">
                        Sign Out
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <div class="brand-image img-fluid">
                <img src="<?= site_url('assets/img/logo.png') ?> " class="brand-image img-fluid ">
            </div>
            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="font-size: 12px !important;">
                        <?php if ($role['role_id'] == 9) { ?>
                            <!-- Menu Data Center -->
                            <li class="nav-item">
                                <a href="<?= site_url('datacenter') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <!-- Menu 2 -->
                            <li class="nav-item">
                                <a href="<?= site_url('datacenter/input_data_akun'); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>Input Data Member</p>
                                </a>
                            </li>

                            <!-- Menu 3 -->
                            <li class="nav-item">
                                <a href="<?= site_url('datacenter/data_akun') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-folder"></i>
                                    <p>Data Member</p>
                                </a>
                            </li>
                            <!-- Menu Data Center -->
                        <?php } elseif ($role['role_id'] == 3) { ?>

                            <!-- Menu Tata Usaha -->
                            <!-- Menu 4 -->
                            <li class="nav-item">
                                <a href="<?= site_url('tatausaha/dashboard_smk') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <!-- Menu Dropdown -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Input Data
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-circle nav-icon"></i>
                                            <p>Data Siswa</p>
                                            <i class="right fas fa-angle-left"></i>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="<?= site_url('tatausaha/data_siswa_kelas_x') ?>" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Kelas X</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?= site_url('tatausaha/data_siswa_kelas_xi') ?>" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Kelas XI</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?= site_url('tatausaha/data_siswa_kelas_xii') ?>" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Kelas XII</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Alumni</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= site_url('tatausaha/data_guru') ?>" class="nav-link">
                                            <i class="fas fa-circle nav-icon"></i>
                                            <p>Data Guru</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Menu Dropdown -->

                            <!-- Menu 4 -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-money-bill-wave"></i>
                                    <p>
                                        Pembayaran Siswa
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-circle nav-icon"></i>
                                            <p>Input Tagihan Siswa</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= site_url('tatausaha/data_tagihan_smk') ?>" class="nav-link">
                                            <i class="fas fa-circle nav-icon"></i>
                                            <p>Data Tagihan Siswa</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-circle nav-icon"></i>
                                            <p>Data Tunggakan Siswa</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Menu Tata Usaha -->
                        <?php } ?>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>