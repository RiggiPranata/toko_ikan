<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/websiteplanet-dummy-16X16.png'); ?>" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <!-- Start Navbar -->
        <div class="nav-bar">
            <nav class="navbar navbar-expand-xl bg-light p-2">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="<?= base_url('assets/img/websiteplanet-dummy-52X52.png'); ?>" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Produk
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Ikan Guppy</a></li>
                                    <li><a class="dropdown-item" href="#">Ikan Cupang</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Perlengkapan Ikan</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <ul class="navbar-nav ms-xl-5 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Cart
                                    <img src="<?= base_url('assets/img/icons8-add-shopping-cart-30.png'); ?>" alt="">
                                </a>
                            </li>
                    </div>
                </div>
            </nav>

        </div>
        <!-- End Navbar -->

        <!-- Start Ads -->
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <img src="<?= base_url('assets/img/websiteplanet-dummy-575X575.png'); ?>" class="img-fluid" alt="...">
                </div>
                <div class="col">
                    <img src="<?= base_url('assets/img/websiteplanet-dummy-575X575.png'); ?>" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
        <!-- End Ads -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>