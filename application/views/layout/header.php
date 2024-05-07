<!doctype html>
<html lang="en">
<?php
// Code to load CodeIgniter environment
// require_once('/index.php');

// Panggil model
$CI = &get_instance();
$CI->load->model('Visitor_model');

// Panggil fungsi untuk menambahkan pengunjung
$CI->Visitor_model->add_visitor();
?>

<head>
    <title>Berlian | Home</title>
    <link rel="shortcut icon" href="<?= base_url('/public/assets/img/favicon.png') ?>" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('/public/css/style.css') ?>">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?= base_url('/node_modules/bootstrap-select/dist/css/bootstrap-select.min.css') ?>">


    <!-- font awesome -->
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />

    <!-- datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

</head>

<body>
    <header>
        <!-- place navbar here -->
        <?php
        $this->load->view('layout/navbar.php');
        ?>
    </header>