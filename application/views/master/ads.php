<div class="col-lg-12 mt-3">
    <div id="contact" class="box">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Picture</th>
                    <th>Is Active</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($ads as $result) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $result['nama_ads']; ?></td>
                        <td class="w-50"><img src="<?= base_url(); ?>assets/img/<?= $result['foto_ads']; ?>" class="w-25"></td>
                        <td>
                            <?php
                            if ($result['isActive'] == 1) {
                            ?> <b class="text-danger">ON</b></p><?php
                                                            } else {
                                                                ?> <b>OFF</b><?php
                                                                            }
                                                                                ?>
                        </td>
                        <td>
                            <a href="<?= base_url(); ?>ads/hapus/<?= $result['ads_id']; ?>" class="badge bg-danger text-white float-end text-decoration-none" onclick="return confirm('yakin?');">Hapus</a>
                            <a href="<?= base_url(); ?>ads/ubah/<?= $result['ads_id']; ?>" class="badge bg-info float-end text-white text-decoration-none">Ubah</a>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>