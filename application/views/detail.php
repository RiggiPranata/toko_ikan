<div class="col-lg-12 order-1 order-lg-2">
    <div id="productMain" class="row">
        <div class="col-md-6">
            <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                <?php foreach ($produk as $result) : ?>
                    <div class="item"> <img src="<?= base_url(); ?>assets/img/<?= $result->image; ?>" alt="" class="img-fluid"></div>
                <?php endforeach; ?>
            </div>
            <div class="ribbon sale">
                <div class="theribbon">SALE</div>
                <div class="ribbon-background"></div>
            </div>
            <!-- /.ribbon-->
            <div class="ribbon new">
                <div class="theribbon">NEW</div>
                <div class="ribbon-background"></div>
            </div>
            <!-- /.ribbon-->
        </div>
        <div class="col-md-6">
            <div class="box">
                <h1 class="text-center"><?= $result->nama_produk; ?></h1>
                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material &amp; care and sizing</a></p>
                <p class="price">Rp.<?= $result->harga; ?></p>
                <p class="text-center buttons"><a href="<?= base_url(); ?>basket/addCart/<?= $result->produk_id; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a><a href="<?= base_url('checkout'); ?>" class="btn btn-outline-primary"><i class="fa fa-heart"></i> Buy Now</a></p>
            </div>
            <div data-slider-id="1" class="owl-thumbs">
                <?php foreach ($produk as $result) : ?>
                    <button class="owl-thumb-item"><img src="<?= base_url(); ?>assets/img/<?= $result->image; ?>" alt="" class="img-fluid"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div id="details" class="box">
        <p></p>
        <h4>Product details</h4>
        <p><?= $result->deskripsi; ?></p>
        <hr>
        <div class="social">
            <h4>Show it to your friends</h4>
            <p>
                <a rel='nofollow' href='https://www.facebook.com/sharer.php?u=riggipranata' class="external facebook"><i class="fa fa-facebook"></i></a>
                <a rel='nofollow' href='https://twitter.com/share?url=pranata_riggi?t=eOtCOtTsEwYDdTJgJ7uZAA&s=08' class="external twitter"><i class="fa fa-twitter"></i></a>
                <a rel='nofollow' href='mailto:?Subject=Ayo dapatkan promo menarik&Body=Untuk Ikan guppy sky blu sedang ada promo menarik!! <br> Potongan Hingga 15% <br> Segera checkout sebelum periode promo berakhir hanya di www.toko_ikan.com' class="email"><i class="fa fa-envelope"></i></a>
            </p>
        </div>
    </div>
</div>
</div>
</div>
<!-- /.col-md-12-->
</div>
</div>
</div>
</div>