<div class="col-lg-9 mx-auto mt-3">
    <div id="contact" class="box">
        <form action="<?= base_url(); ?>order/ubah/<?= $order['order_id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Order ID</label>
                <input type="number" class="form-control" id="orderId" name="orderId" value="<?= $order['order_id']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama">Nama Customer</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $order['nama_user']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama">No Telepon</label>
                <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $order['no_telepon']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $order['email']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama">Alamat</label>
                <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"><?= $order['alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="nama">Jumlah Barang</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $order['jumlah']; ?>">
            </div>
            <div class="form-group">
                <label for="nama">Total Harga</label>
                <input type="number" class="form-control" id="total" name="total" value="<?= $order['total']; ?>">
            </div>
            <div class="form-group">
                <label for="nama">Status Pesanan</label>
                <input type="text" class="form-control" id="status" name="status" value="<?= $order['status']; ?>">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary px-5">Submit</button>
            </div>
        </form>
    </div>
</div>