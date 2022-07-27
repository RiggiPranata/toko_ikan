<div id="basket" class="col-lg-9">
    <div class="box">
        <form method="post" action="<?= base_url('checkout/checkout1'); ?>">
            <h1>Shopping cart</h1>
            <p class="text-muted">You currently have 3 item(s) in your cart.</p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th>Quantity</th>
                            <th>Unit price</th>
                            <th>Discount</th>
                            <th colspan="2">Total</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($produk as $result) : ?>
                            <tr>
                                <td><a href="#"><img src="<?= base_url(); ?>/assets/img/<?= $result[0]['image']; ?>" alt=""></a></td>
                                <td><a href="#"><?= $result[0]['nama_produk']; ?></a></td>
                                <td>
                                    <input type="number" id="qty" value="<?= $qty; ?>" class="form-control">
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
                            <th id="totalHarga" colspan="2"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.table-responsive-->
            <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                <div class="left"><a href="<?= base_url('produk'); ?>" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                <div class="right">
                    <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.box-->

</div>
<!-- /.col-lg-9-->