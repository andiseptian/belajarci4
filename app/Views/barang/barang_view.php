<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Data barang</h2>
            <table class="table">
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Qty</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Aksi</th>
                </tr>
                <?php $no = 1;
                foreach ($getBarang as $isi) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $isi['nama_barang']; ?></td>
                        <td><?= $isi['qty']; ?></td>
                        <td>Rp<?= number_format($isi['harga_beli']); ?>,-</td>
                        <td>Rp<?= number_format($isi['harga_jual']); ?>,-</td>
                        <td>
                            <a href="<?= base_url('barang/edit/' . $isi['id_barang']); ?>" class="btn btn-success">
                                Edit</a>
                            <a href="<?= base_url('barang/hapus/' . $isi['id_barang']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')" class="btn btn-danger">
                                Hapus</a>

                        </td>
                    </tr>
                <?php $no++;
                } ?>

            </table>
            <a href="/barang/tambah" class="btn btn-success"> Tambah Data </a>
        </div>
    </div>
</div>