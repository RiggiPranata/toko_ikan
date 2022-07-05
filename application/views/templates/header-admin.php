<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/favicon.png">
</head>

<body>
    <header>
        <!-- TOP BAR -->
        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-end text-lg-right">
                        <ul class="menu list-inline mb-0">
                            <li class="list-inline-item"><a href="<?= base_url('home'); ?>">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- NAV -->
        <nav class="navbar navbar-expand-lg">
            <div class="container"><a href="" class="navbar-brand home"><img src="<?= base_url(); ?>assets/img/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="<?= base_url(); ?>assets/img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
                <div class="navbar-buttons">
                    <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                </div>
                <div id="navigation" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="<?= base_url('admin'); ?>" class="nav-link">Produk</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/kategori'); ?>" class="nav-link">Katageori</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/ads'); ?>" class="nav-link">Ads</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- TAMBAH DATA -->
    <div class="col-lg-12 m-2">
        <a href="<?= base_url(); ?><?= $menu; ?>/tambah" class="btn btn-primary">Tambah Data <?= $menu ?></a>
    </div>