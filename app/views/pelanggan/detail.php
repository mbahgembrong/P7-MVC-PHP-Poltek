<!-- Awal Content -->
<div class="card">
    <h5 class="card-header">Detail Data Pelanggan Toko <?= $data['nama']; ?></h5>
    <div class="card-body">
        <form action="<?= BASEURL; ?>/pelanggan/update" method="POST">
        <?php
            $i=1;
            foreach($data['pelanggan'] as $data) :
        ?>
            <div class="form-group row">
                <label for="id" class="col-sm-3 col-form-label">ID Pelanggan</label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" name="id_pelanggan" value="<?= $data['id_pelanggan']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" value="<?= $data['nama']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="alamat" value="<?= $data['alamat']; ?>">
                </div>
                <label for="desa" class="col-sm-2 col-form-label">Desa</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="desa" value="<?= $data['desa']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="kecamatan" value="<?= $data['kecamatan']; ?>">
                </div>
                <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="kota" value="<?= $data['kota']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="telepon" class="col-sm-3 col-form-label">Telepon</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="telepon" value="<?= $data['telepon']; ?>">
                </div>
            </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>