<div id="checkout" class="col-lg-9">
    <div class="box">
        <form method="get" action="<?= base_url('checkout/checkout4'); ?>">
            <h1>Checkout - Payment method</h1>
            <div class="nav flex-column flex-md-row nav-pills text-center">
                <a href="<?= base_url('checkout/checkout1'); ?>" class="nav-link flex-sm-fill text-sm-center "> <i class="fa fa-map-marker"> </i>Address</a>
                <a href="<?= base_url('checkout/checkout2'); ?>" class="nav-link flex-sm-fill text-sm-center "> <i class="fa fa-truck"> </i>Delivery Method</a>
                <a href="<?= base_url('checkout/checkout3'); ?>" class="nav-link flex-sm-fill text-sm-center active"> <i class="fa fa-money"> </i>Payment Method</a>
                <a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-eye"> </i>Order Review</a>
            </div>
            <div class="content py-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box payment-method">
                            <h4>GOPAY</h4>
                            <p>We like it all.</p>
                            <div class="box-footer text-center">
                                <input type="radio" name="payment" value="payment1" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box payment-method">
                            <h4>CASH</h4>
                            <p>Cash on Deal.</p>
                            <div class="box-footer text-center">
                                <input type="radio" name="payment" value="payment2" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row-->
            </div>
            <!-- /.content-->
            <div class="box-footer d-flex justify-content-between"><a href="<?= base_url('checkout/checkout2'); ?>" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to Shipping Method</a>
                <button type="submit" class="btn btn-primary">Continue to Order Review<i class="fa fa-chevron-right"></i></button>
            </div>
        </form>
        <!-- /.box-->
    </div>
</div>
<!-- /.col-lg-9-->