<div class="col-lg-12 mt-3">
    <div id="contact" class="box">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kategori as $result) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $result['nama_kategori']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>kategori/hapus/<?= $result['kategori_id']; ?>" class="badge bg-danger float-end text-white text-decoration-none" onclick="return confirm('yakin?');">Hapus</a>
                            <a href="<?= base_url(); ?>kategori/ubah/<?= $result['kategori_id']; ?>" class="badge bg-info float-end text-white text-decoration-none">Ubah</a>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>