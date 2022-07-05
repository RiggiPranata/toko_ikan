<div class="col-lg-12 mt-3">
    <div id="contact" class="box">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($produk as $result) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $result['nama_produk']; ?></td>
                        <td><?= $result['kategori']; ?></td>
                        <td><?= $result['harga']; ?></td>
                        <td><?= $result['deskripsi']; ?></td>
                        <td><?= $result['stok']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>produk/hapus/<?= $result['produk_id']; ?>" class="badge bg-danger float-end text-white text-decoration-none" onclick="return confirm('yakin?');">Hapus</a>
                            <a href="<?= base_url(); ?>produk/ubah/<?= $result['produk_id']; ?>" class="badge bg-info float-end text-white text-decoration-none">Ubah</a>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>