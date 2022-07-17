<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>
        <?php
        if (isset($title)) {
            echo 'KlasQ ~ ' . $title;
        } else {
            echo 'KlasQ';
        }
        ?>
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo-1.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="<?= base_url(); ?>assets/plugins/custom/leaflet/leaflet.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?= base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <style>
        h2.swal2-title {
            font-size: 1.5rem;
        }

        div#swal2-content {
            font-size: 1rem;
        }

        button.swal2-confirm {
            background-color: #f73563 !important;
            border-color: transparent !important;
            color: #FFFFFF;
            width: 100px;
            height: 50px;
            font-size: 16px;
            border-radius: 10px;
        }

        .swal2-popup .swal2-title {
            font-weight: 500;
            font-size: 1.8rem;
            color: #181c32;
        }

        .swal2-popup .swal2-content, .swal2-popup .swal2-html-container {
            font-weight: 400;
            font-size: 1.1rem;
            margin-top: 0.75rem !important;
            color: #3f4254;
        }

        div#swal2-content {
            font-size: 1.1rem !important;
        }
    </style>

    <!--end::Global Stylesheets Bundle-->

    <!-- ClockPicker Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/plugins/clockpicker/bootstrap-clockpicker.min.css">

    <!-- DateRangePicker Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/plugins/daterangepicker/css/daterangepicker.css">

    <!-- select2 -->
    <!-- <link href="<?= base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" /> -->

    <script src="https://kit.fontawesome.com/9abc1f10f1.js" crossorigin="anonymous"></script>




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
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">