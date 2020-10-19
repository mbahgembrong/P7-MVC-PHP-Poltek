<!-- Awal Content -->
<div class="card">
    <h5 class="card-header">Detail Data Pegawai Toko <?= BASENAME; ?></h5>
    <div class="card-body">
        <form action="<?= BASEURL; ?>/pegawai/update" method="POST">
            <?php
            $i = 1;
            foreach ($data['pegawai'] as $data) :
            ?>
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label">ID Pegawai</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" name="id_pegawai" value="<?= $data['id_pegawai']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_pegawai" class="col-sm-3 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_pegawai" value="<?= $data['nama_pegawai']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telepon" class="col-sm-3 col-form-label">Telepon</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="telepon" value="<?= $data['telepon']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="jabatan" value="<?= $data['jabatan']; ?>">
                    </div>
                    <label for="kode_wilayah" class="col-sm-2 col-form-label">Wilayah</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="kode_wilayah" value="<?= $data['kode_wilayah']; ?>">
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- menambah button -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>