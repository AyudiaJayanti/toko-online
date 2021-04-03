<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="col-md-4">
                    <img class="card-img-top" src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>">
                </div>
                <div class="col-md-8">
                    <table class="table table-borderless">
                        <tr>
                            <th>Nama Produk</th>
                            <td><?php echo $brg->nama_brg ?></td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td><?php echo $brg->ket ?></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td><?php echo $brg->kategori ?></td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td><?php echo $brg->stok ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>
                                <div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga, '0', ',', '.') ?></div>
                            </td>
                        </tr>
                    </table>
                    <div class="text-center">
                        <?php echo anchor('dashboard/index/', '<div class="btn btn-danger btn-sm">Kembali</div>') ?>
                        <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-primary btn-sm">Tambah ke keranjang</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>