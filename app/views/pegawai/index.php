<!-- awal content -->
<div class='card'>
    <h5 class='card-header'>Data Pegawai Toko <?= $data['nama']; ?></h5>
    <div class='card-body'>
    <?php
        Flasher::flash();
        Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
    ?>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Nama</th>
                    <th scope='col'>Telepon</th>
                    <th scope='col'>Jabatan</th>
                    <th scope="col">Aksi</th> <!-- penambahan Aksi -->
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data['pegawai'] as $data) :
                ?>
                    <tr>
                        <th scope='row'><?= $i++; ?></th>
                        <td><?= $data['nama_pegawai']; ?></td>
                        <td><?= $data['telepon']; ?></td>
                        <td><?= $data['jabatan']; ?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" 
                            href="<?= BASEURL; ?>/pegawai/detail/<?= $data['id_pegawai']; ?>" role='button'>
                                Detail<!-- penambahan button -->
                            </a>
                            <a class="btn btn-danger btn-sm" 
                            href="<?= BASEURL; ?>/pegawai/delete/<?= $data['id_pegawai']; ?>" role="button">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Pegawai
        </button>
    </div>
</div>
<!-- Akhir Content -->

<!-- awal modal tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/pegawai/input" method="POST">
                    <div class="form-row">
                        <label for="formGroupExampleInput">ID</label>
                        <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" placeholder="ID Pegawai">
                    </div>
                    <div class="form-row">
                        <label for="formGroupExampleInput">Nama</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Nama Pegawai">
                    </div>
                    
                    <div class="form-row">
                        <label for="formGroupExampleInput">Telepon</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="telepon" placeholder="Telepon">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="formGroupExampleInput">Wilayah</label>
                            <input type="text" class="form-control" id="kode_wilayah" name="kode_wilayah" placeholder="Kode Wilayah">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput2">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
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