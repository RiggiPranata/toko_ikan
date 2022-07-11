<div class="col-lg-12 mt-3">
    <div id="contact" class="box">
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Nama Customer</th>
                    <th>No Telpon</th>
                    <th>E-mail</th>
                    <th>Alamat</th>
                    <th>Jumlah Barang</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($order as $result) { ?>
                    <tr>
                        <td><?= $result['order_id']; ?></td>
                        <td><?= $result['nama_user']; ?></td>
                        <td><?= $result['no_telepon']; ?></td>
                        <td><?= $result['email']; ?></td>
                        <td><?= $result['alamat']; ?></td>
                        <td><?= $result['jumlah']; ?></td>
                        <td><?= $result['total']; ?></td>
                        <td><?= $result['status']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>order/hapus/<?= $result['order_id']; ?>" class="badge bg-danger float-end text-white text-decoration-none" onclick="return confirm('yakin?');">Hapus</a>
                            <a href="<?= base_url(); ?>order/ubah/<?= $result['order_id']; ?>" class="badge bg-info float-end text-white text-decoration-none">Ubah</a>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
</div>