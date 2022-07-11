<div id="all">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="main-slider" class="owl-carousel owl-theme">
                        <?php
                        foreach ($ads as $ad) {
                        ?>
                            <div class="item"><img src="<?= base_url(); ?>assets/img/<?= $ad->foto_ads; ?>" alt="<?= $ad->nama_ads; ?>" class="img-fluid "></div>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- /#main-slider-->
                </div>
            </div>
        </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id="advantages">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                            <div class="icon"><i class="fa fa-heart"></i></div>
                            <h3><a href="#">We love our customers</a></h3>
                            <p class="mb-0">We are known to provide best possible service ever</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                            <div class="icon"><i class="fa fa-tags"></i></div>
                            <h3><a href="#">Best prices</a></h3>
                            <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                            <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                            <h3><a href="#">100% satisfaction guaranteed</a></h3>
                            <p class="mb-0">Free returns on everything for 3 months.</p>
                        </div>
                    </div>
                </div>
                <!-- /.row-->
            </div>
            <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div id="hot">
            <div class="box py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mb-0">Hot this week</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="product-slider owl-carousel owl-theme">
                    <?php
                    foreach ($hot_produk as $hot) {
                    ?>
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front"><a href="<?= base_url(); ?>produk/detail/<?= $hot->produk_id; ?>"><img src="<?= base_url(); ?>assets/img/<?= $hot->image; ?>" alt="<?= $hot->deskripsi; ?>" class="img-fluid"></a></div>
                                    </div>
                                </div><a href="<?= base_url(); ?>produk/detail/<?= $hot->produk_id; ?>" class="invisible"><img src="<?= base_url(); ?>assets/img/<?= $hot->image; ?>" alt="" class="img-fluid"></a>
                                <div class="text">
                                    <h3><a href="<?= base_url(); ?>produk/detail/<?= $hot->produk_id; ?>"><?= $hot->nama_produk; ?></a></h3>
                                    <p class="price">
                                        <del></del>Rp. <?= $hot->harga; ?>
                                    </p>
                                </div>
                                <!-- /.text-->
                                <div class="ribbon sale">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon-->
                            </div>
                            <!-- /.product-->
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- /.product-slider-->
            </div>
            <!-- /.container-->
        </div>
        <!-- /#hot-->
        <!-- *** HOT END ***-->
    </div>
    <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
    <div class="container">
        <div class="col-md-12">
            <div class="box slideshow">
                <h3>Get Inspired</h3>
                <p class="lead">Dapatkan tips and trik tentang ikan</p>
                <div id="get-inspired" class="owl-carousel owl-theme">
                    <div class="item"><a href="#"><img src="<?= base_url(); ?>assets/img/ins3.png" alt="Get inspired" class="img-fluid"></a></div>
                    <div class="item"><a href="#"><img src="<?= base_url(); ?>assets/img/ins4.png" alt="Get inspired" class="img-fluid"></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** GET INSPIRED END ***-->
</div>
</div>