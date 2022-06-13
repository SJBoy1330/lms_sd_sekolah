<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>
        <?php
        if (isset($title)) {
            echo 'KlasQ ~ ' . $title;
        } else {
            echo 'KlasQ';
        }
        ?>
    </title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/img/alphatech-logo.png" rel="icon">
    <link href="<?= base_url(); ?>assets/img/alphatech-logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>assets/css/landing.css" rel="stylesheet">

    <!-- Modify Template CSS -->
    <link href="<?= base_url(); ?>assets/css/modify-landing.css" rel="stylesheet">

    <style>
        h2.swal2-title {
            font-size: 1.5rem;
        }

        div#swal2-content {
            font-size: 1rem;
        }
    </style>


    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/649c0dd522.js" crossorigin="anonymous"></script>

    <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


    <?php

    if (isset($css_add) && is_array($css_add)) {

        foreach ($css_add as $css) {

            echo $css;
        }
    } else {

        echo (isset($css_add) && ($css_add != "") ? $css_add : "");
    }

    ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-none">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="<?= base_url('dashboard') ?>" class="logo d-flex align-items-center">
                <img src="<?= base_url(); ?>assets/img/logo-1.png" alt="">
                <span class="ms-2">KlasQ</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url('dashboard') ?>">DASHBOARD</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('dashboard/riwayat') ?>">RIWAYAT UJIAN</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('dashboard/laporan') ?>">LAPORAN UJIAN</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <!-- Untuk Dashboard, Riwayat Ujian, & Laporan -->
            <div class="logo d-flex align-items-center">
                <div class="avatar" style="background-image: url(assets/img/hipster.png)">
                </div>
            </div>
        </div>
    </header><!-- End Header -->