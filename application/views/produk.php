<div class="col-lg-12">
    <div class="box info-bar">
        <div class="row">
            <div class="col-md-12 col-lg-4 products-showing">Showing <strong>12</strong> of <strong>25</strong> products</div>
            <div class="col-md-12 col-lg-7 products-number-sort">
                <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row">
                    <div class="products-number"><strong>Show</strong><a href="#" class="btn btn-sm btn-primary">12</a><a href="#" class="btn btn-outline-secondary btn-sm">24</a><a href="#" class="btn btn-outline-secondary btn-sm">All</a><span>products</span></div>
                    <div class="products-sort-by mt-2 mt-lg-0"><strong>Sort by</strong>
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
                            <div class="back"><a href="<?= base_url(); ?>produk/detail/<?= $prod->produk_id; ?>"><img src="<?= base_url(); ?>assets/img/<?= $prod->image; ?>" alt="<?= $prod->deskripsi; ?>" class="img-fluid"></a></div>
                        </div>
                    </div><a href="<?= base_url(); ?>produk/detail/<?= $prod->produk_id; ?>" class="invisible"><img src="<?= base_url(); ?>assets/img/product1.jpg" alt="" class="img-fluid"></a>
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
        <p class="loadMore"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a></p>
        <nav aria-label="Page navigation example" class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- /.col-lg-9-->
</div>
</div>
</div>
</div>
<script src="<?= base_url(); ?>assets/js/sort.js" defer></script>