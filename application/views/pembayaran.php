<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "Total belanja anda : Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div>
            <div>
                <h3>Detail Pengiriman</h3>
                <form method="POST" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Anda">
                    </div>

                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input class="form-control" type="text" name="alamat" placeholder="Nama Lengkap Anda">
                    </div>

                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input class="form-control" type="phone" name="notelp" placeholder="Nama Lengkap Anda">
                    </div>
                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select class="form-control" name="jasa_kirim">
                            <option value="JNE">JNE</option>
                            <option value="JNT">JNT</option>
                            <option value="TIKI">TIKI</option>
                            <option value="Wahana">Wahana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pembayaran</label>
                        <select class="form-control" name="metode_bayar">
                            <option value="COD">COD</option>
                            <option value="BCA">BCA</option>
                            <option value="BTN">BTN</option>
                            <option value="BRI">BRI</option>
                        </select>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Pesan</button>
                    </div>
                </form>
            <?php
                } else {
                    echo "Keranjang Masih kosong";
                } ?>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>