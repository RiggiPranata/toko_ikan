<div id="checkout" class="col-lg-9">
    <div class="box">
        <form method="get" action="<?= base_url('order/addOrder'); ?>">
            <h1>Checkout - Order review</h1>
            <div class="nav flex-column flex-md-row nav-pills text-center">
                <a href="<?= base_url('checkout/checkout1'); ?>" class="nav-link flex-sm-fill text-sm-center "> <i class="fa fa-map-marker"> </i>Address</a>
                <a href="<?= base_url('checkout/checkout2'); ?>" class="nav-link flex-sm-fill text-sm-center "> <i class="fa fa-truck"> </i>Delivery Method</a>
                <a href="<?= base_url('checkout/checkout3'); ?>" class="nav-link flex-sm-fill text-sm-center "> <i class="fa fa-money"> </i>Payment Method</a>
                <a href="<?= base_url('checkout/checkout4'); ?>" class="nav-link flex-sm-fill text-sm-center active"> <i class="fa fa-eye"> </i>Order Review</a>
            </div>
            <div class="content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Product</th>
                                <th>Quantity</th>
                                <th>Unit price</th>
                                <th>Discount</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($produk as $result) : ?>
                                <tr>
                                    <td><img src="<?= base_url(); ?>/assets/img/<?= $result[0]['image']; ?>" alt="">
                                    </td>
                                    <td><?= $result[0]['nama_produk']; ?></td>
                                    <td>
                                        <?= $qty; ?>
                                    </td>
                                    <td id="harga">Rp.<?= $result[0]['harga']; ?></td>
                                    <td>$0.00</td>
                                    <td id="total">Rp.</td>
                                    <td><a href=""><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">Total</th>
                                <th>$446.00</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.table-responsive-->
            </div>
            <!-- /.content-->
            <div class="box-footer d-flex justify-content-between"><a href="<?= base_url('checkout/checkout3'); ?>" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to payment method</a>
                <button type="submit" class="btn btn-primary">Place an order<i class="fa fa-chevron-right"></i></button>
            </div>
        </form>
    </div>
    <!-- /.box-->
</div>
<!-- /.col-lg-9-->
<script src="<?= base_url(); ?>assets/js/Harga.js"></script>