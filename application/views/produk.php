<div class="col-lg-12">
    <div class="box info-bar">
        <div class="row">
            <div class="col-md-12 col-lg-7 products-number-sort">
                <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row">
                    <div class="products-sort-by mt-2 mt-lg-0"><strong id="url">Sort by</strong>
                        <select id="sort-by" name="sort-by" class="form-control">
                            <option value="produk_id">All</option>
                            <option value="nama_produk">Nama</option>
                            <option value="harga">Price</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row products">
        <?php
        foreach ($produk as $prod) {
        ?>
            <div class="col-lg-3 col-md-4">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front"><a href="<?= base_url(); ?>produk/detail/<?= $prod->produk_id; ?>"><img src="<?= base_url(); ?>assets/img/<?= $prod->image; ?>" alt="<?= $prod->deskripsi; ?>" class="img-fluid"></a></div>
                        </div>
                    </div><a href="<?= base_url(); ?>produk/detail/<?= $prod->produk_id; ?>" class="invisible"><img src="<?= base_url(); ?>assets/img/<?= $prod->image; ?>" alt="" class="img-fluid"></a>
                    <div class="text">
                        <h3><a href="<?= base_url(); ?>produk/detail/<?= $prod->produk_id; ?>" id="sort-nama" data-order='ASC'><?= $prod->nama_produk; ?></a></h3>
                        <p class="price">
                            <del></del>Rp. <?= $prod->harga; ?>
                        </p>
                        <p class="buttons"><a href="<?= base_url('produk/detail'); ?>" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                    </div>
                    <!-- /.text-->
                </div>
                <!-- /.product            -->
            </div>
        <?php } ?>

    </div>
    <div class="pages">
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>
<!-- /.col-lg-9-->
</div>
</div>
</div>
</div>
<script src="<?= base_url(); ?>assets/js/sort_produk.js" defer></script>
<script src="<?= base_url(); ?>assets/js/sort_ikan.js" defer></script>