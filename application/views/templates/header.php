<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
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
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body id="all">
    <!-- navbar-->
    <header class="header mb-5">
        <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-end text-lg-right">
                        <ul class="menu list-inline mb-0">
                            <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                            <li class="list-inline-item"><a href="<?= base_url('contact'); ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Admin login</h5>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('admin'); ?>" method="POST">
                                <div class="form-group">
                                    <input id="email-modal" type="email" name="email" placeholder="email" class="form-control" value="<?= set_value('email'); ?>">
                                </div>
                                <div class="form-group">
                                    <input id="password-modal" type="password" name="password" placeholder="password" class="form-control">
                                </div>
                                <p class="text-center">
                                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *** TOP BAR END ***-->


        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container"><a href="<?= base_url('home'); ?>" class="navbar-brand home"><img src="<?= base_url(); ?>assets/img/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="<?= base_url(); ?>assets/img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
                <div class="navbar-buttons">
                    <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                    <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="<?= base_url('basket'); ?>" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
                </div>
                <div id="navigation" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <?php foreach ($menu as $result) : ?>
                            <li class="nav-item"><a href="<?= base_url(); ?><?= $result['url']; ?>" class="nav-link"><?= $result['judul']; ?></a></li>
                        <?php endforeach; ?>
                </div>
                </ul>
                <div class="navbar-buttons d-flex justify-content-end">
                    <!-- /.nav-collapse-->
                    <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
                    <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="<?= base_url('basket'); ?>" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>cart</span></a></div>
                </div>
            </div>
            </div>
        </nav>
        <div id="search" class="collapse">
            <div class="container">
                <form method="POST" action="<?= base_url('produk/cari'); ?>" class="ml-auto">
                    <div class="input-group">
                        <input type="text" placeholder="Search" id="keyword" autofocus autocomplete="off" name="keyword" class="form-control">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>