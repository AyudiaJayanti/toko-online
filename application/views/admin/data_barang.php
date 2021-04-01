<div class="container-fluid">
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Kategori</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($barang as $brg) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $brg->nama_brg ?></td>
                    <td><?php echo $brg->ket ?></td>
                    <td><?php echo $brg->kategori ?></td>
                    <td><?php echo $brg->harga ?></td>
                    <td><?php echo $brg->stok ?></td>
                    <td>
                        <div class="btn btn-sm btn-primary"><i class="fa fa-search fa-sm"></i></div>
                    </td>
                    <td>
                        <div class="btn btn-sm btn-success"><i class="fa fa-edit fa-sm"></i></div>
                    </td>
                    <td>
                        <div class="btn btn-sm btn-danger"><i class="fa fa-trash fa-sm"></i></div>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="<?php echo base_url() . 'admin/data_barang/tambah_aksi' ?>">
                    <div class="form-group">
                        <label for="namabarang">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_brg">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" name="keterangan_brg">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kategori</label>
                        <select class="form-control" name="kategori_brg">
                            <option value="Elektronik">Elektronik</option>
                            <option value="Pakaian Pria">Pakaian Pria</option>
                            <option value="Pakaian Wanita">Pakaian Wanita</option>
                            <option value="Pakaian Anak">Pakaian Anak-anak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control" name="harga_brg">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" class="form-control" name="stok_brg">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" name="gambar_brg">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>