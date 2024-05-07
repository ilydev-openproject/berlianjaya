<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Velonic - Bootstrap 5 Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('/public/Admin/dist/') ?>assets/images/favicon.ico">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">


    <!-- Icons css -->
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Datatables css -->
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />


    <!-- dropify -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">

    <!-- Select2 css -->
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Daterangepicker css -->
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Touchspin css -->
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Datepicker css -->
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Timepicker css -->
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Flatpickr Timepicker css -->
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- Plugin css -->
    <link rel="stylesheet" href="<?= base_url('/public/Admin/dist/') ?>assets/vendor/jquery-toast-plugin/jquery.toast.min.css">


    <!-- Theme Config Js -->
    <script src="<?= base_url('/public/Admin/dist/') ?>assets/js/config.js"></script>

    <!-- App css -->
    <link href="<?= base_url('/public/Admin/dist/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Sumber daya SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- summernone -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <style>
        #chart {
            max-width: 650px;
            margin: 35px auto;
        }
    </style>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">
        <?php
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar');
        ?>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active"><?= ucwords($this->uri->segment(2)) ?></li>
                                    </ol>
                                </div>
                                <h4 class="page-title"><?= ucwords($this->uri->segment(2)) ?></h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->