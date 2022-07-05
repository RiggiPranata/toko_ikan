<div class="col-lg-9 mx-auto mt-3">
    <div id="contact" class="box">
        <?php
        $target_page = (count($produk) > 0) ? "ubah/" . $produk[0]->produk_id : "tambah";
        ?>
        <form action="<?= base_url() . 'produk/' . $target_page; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= (count($produk) > 0) ? $produk[0]->nama_produk : ''; ?>">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" id="kategori" name="kategori">
                    <?php foreach ($kategori as $result) : ?>
                        <?php if ($result['nama_kategori'] == $produk[0]->kategori) : ?>
                            <option value="<?= $result['nama_kategori']; ?>" selected><?= $result['nama_kategori']; ?></option>
                        <?php else : ?>
                            <option value="<?= $result['nama_kategori']; ?>"><?= $result['nama_kategori']; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?= (count($produk) > 0) ? $produk[0]->harga : ''; ?>" placeholder="Rupiah">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= (count($produk) > 0) ? $produk[0]->deskripsi : ''; ?></textarea>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" placeholder="pcs" value="<?= (count($produk) > 0) ? $produk[0]->stok : ''; ?>">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" name="image" value="<?= (count($produk) > 0) ? $produk[0]->image : ''; ?>">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary px-5">Submit</button>
            </div>
        </form>
    </div>
</div>