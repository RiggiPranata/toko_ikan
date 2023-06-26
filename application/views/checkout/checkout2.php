<div id="checkout" class="col-lg-9">
    <div class="box">
        <form method="get" action="<?= base_url('checkout/checkout3'); ?>">
            <h1>Checkout - Delivery method</h1>
            <div class="nav flex-column flex-md-row nav-pills text-center">
                <a href="<?= base_url('checkout/checkout1'); ?>" class="nav-link flex-sm-fill text-sm-center "> <i class="fa fa-map-marker"> </i>Address</a>
                <a href="<?= base_url('checkout/checkout2'); ?>" class="nav-link flex-sm-fill text-sm-center active"> <i class="fa fa-truck"> </i>Delivery Method</a>
                <a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-money"> </i>Payment Method</a>
                <a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-eye"> </i>Order Review</a>
            </div>
            <div class="content py-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box shipping-method">
                            <h4>GO SEND</h4>
                            <p>Get it now.</p>
                            <div class="box-footer text-center">
                                <input type="radio" name="delivery" value="delivery1" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box shipping-method">
                            <h4>COD</h4>
                            <p>Meet and Pay.</p>
                            <div class="box-footer text-center">
                                <input type="radio" name="delivery" value="delivery2" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer d-flex justify-content-between"><a href="<?= base_url('checkout'); ?>" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to address</a>
                <button type="submit" class="btn btn-primary">Continue to Payment Method<i class="fa fa-chevron-right"></i></button>
            </div>
        </form>
    </div>
    <!-- /.box-->
</div>
<!-- /.col-md-9-->