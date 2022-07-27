<div class="col-lg-9 mx-auto mt-3">
    <div id="contact" class="box">
        <?php
        $target_page = (count($ads) > 0) ? "ubah/" . $ads[0]->ads_id : "tambah";
        ?>
        <form action="<?= base_url() . 'ads/' . $target_page; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= (count($ads) > 0) ? $ads[0]->nama_ads : ''; ?>">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                <label for="image" class="pl-3 text-muted font-italic">file sebelumnya : <?= (count($ads) > 0) ? $ads[0]->foto_ads : ''; ?></label>
            </div>
            <div class="form-check">
                <?php if ((count($ads) > 0) ? $ads[0]->isActive : "" == 1) : ?>
                    <input class="form-check-input" type="checkbox" value="1" name="isActive" id="isActive" checked>
                <?php else : ?>
                    <input class="form-check-input" type="checkbox" value="1" name="isActive" id="isActive">
                <?php endif; ?>
                <label class="form-check-label" for="isActive">
                    Active
                </label>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary px-5">Submit</button>
            </div>
        </form>
    </div>
</div>