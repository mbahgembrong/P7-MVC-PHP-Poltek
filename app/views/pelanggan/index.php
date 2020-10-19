<!-- awal content -->
<div class='card'>
    <h5 class='card-header'>Data Pelanggan Toko <?= BASENAME; ?></h5>
    <div class='card-body'>
    <?php
        Flasher::flash();
        Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
    ?>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>No.</th>
                    <th scope='col'>Nama</th>
                    <th scope='col'>Alamat</th>
                    <th scope='col'>Telepon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                if (isset($data['pelanggan'])) {
                    foreach ($data['pelanggan'] as $data) :
                ?>
                    <tr>
                        <th scope='row'><?= $i++; ?></th>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['telepon']; ?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="<?= BASEURL; ?>/pelanggan/detail/<?= $data['id_pelanggan']; ?>" role='button'>
                                Detail
                            </a>
                            <a class="btn btn-danger btn-sm" href="<?= BASEURL; ?>/pelanggan/delete/<?= $data['id_pelanggan']; ?>" role="button">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach;
                } ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Pelanggan
        </button>
    </div>
</div>
<!-- Akhir Content -->

<!-- awal modal tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/pelanggan/input" method="POST">
                    <div class="form-row">
                        <label for="formGroupExampleInput">ID</label>
                        <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" placeholder="ID Pelanggan">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="formGroupExampleInput">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput2">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon">
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="formGroupExampleInput2">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="desa">Desa</label>
                            <input type="text" class="form-control" id="desa" name="desa" placeholder="Desa">
                        </div>
                        <div class="col">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
                        </div>
                        <div class="col">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Akhir modal tambah -->