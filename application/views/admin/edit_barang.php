<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Barang</h3>
    <?php foreach ($barang as $brg) : ?>

        <form action="<?php echo base_url() . 'admin/Data_barang/update' ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="hidden" name="id_brg" value="<?php echo $brg->id_brg ?>">
            </div>
            <div class="form-group">
                <label for="namabarang">Nama Barang</label>
                <input type="text" class="form-control" name="nama_brg" value="<?php echo $brg->nama_brg ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="keterangan" value="<?php echo $brg->ket ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori</label>
                <select class="form-control" name="kategori" value="<?php echo $brg->kategori ?>">
                    <option value="Elektronik">Elektronik</option>
                    <option value="Pakaian Pria">Pakaian Pria</option>
                    <option value="Pakaian Wanita">Pakaian Wanita</option>
                    <option value="Pakaian Anak">Pakaian Anak-anak</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" name="harga" value="<?php echo $brg->harga ?>">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" class="form-control" name="stok" value="<?php echo $brg->harga ?>">
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    <?php endforeach; ?>
</div>