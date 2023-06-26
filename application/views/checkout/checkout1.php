<div id="checkout" class="col-lg-9">
    <div class="box">
        <form method="POST" action="<?= base_url('checkout/checkout2'); ?>">
            <h1>Checkout - Address</h1>
            <div class="nav flex-column flex-md-row nav-pills text-center">
                <a href="<?= base_url('checkout/checkout1'); ?>" class="nav-link flex-sm-fill text-sm-center active"> <i class="fa fa-map-marker"> </i>Address</a>
                <a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-truck"> </i>Delivery Method</a>
                <a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-money"> </i>Payment Method</a>
                <a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-eye"> </i>Order Review</a>
            </div>
            <div class="content py-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" name='nama' class="form-control" required>
                        </div>
                    </div>
                </div>
                <!-- /.row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="noTelepon">No Telepon</label>
                            <input id="noTelepon" type="text" name='notelepon' class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" name='email' class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input id="alamat" type="text" name='alamat' class="form-control" required>
                        </div>
                    </div>
                </div>
                <!-- /.row-->
            </div>
            <div class="box-footer d-flex justify-content-between"><a href="<?= base_url('basket'); ?>" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to Basket</a>
                <button type="submit" class="btn btn-primary">Continue to Delivery Method<i class="fa fa-chevron-right"></i></button>
            </div>
        </form>
    </div>
    <!-- /.box-->
</div>
<!-- /.col-lg-9-->