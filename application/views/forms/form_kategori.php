<div class="col-lg-9 mx-auto mt-3">
    <div id="contact" class="box">
        <?php
        $target_page = (count($kategori) > 0) ? "ubah/" . $kategori[0]->kategori_id : "tambah";
        ?>
        <form action="<?= base_url() . 'kategori/' . $target_page; ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= (count($kategori) > 0) ? $kategori[0]->nama_kategori : ''; ?>">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary px-5">Submit</button>
            </div>
        </form>
    </div>
</div>