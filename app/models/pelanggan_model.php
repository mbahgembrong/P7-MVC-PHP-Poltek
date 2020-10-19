<?php
    class pelanggan_model
    {
        private $table = 'pelanggan';
        private $db;
        public function __construct()
        {
            $this->db = new Database;
        }

        //method untuk query database
        public function db_pelanggan()
        {
            $data = "SELECT * FROM pelanggan";
            $result = $this->db->connect->query($data);
            while ($i = mysqli_fetch_array($result)) {
                $datapelanggan[] = $i;
            }
            if (isset($datapelanggan)) {
                return $datapelanggan;
            }
        }
        //method untuk query byID
        public function pelangganById($id)
        {
            $data = "SELECT * FROM ".$this->table." WHERE id_pelanggan = '$id'";
            $result = $this->db->connect->query($data);
            while ($i = mysqli_fetch_array($result)) {
                $datapelanggan[] = $i;
            }
            return $datapelanggan;
        }
        //method untuk query tambah data
        public function tambahpelanggan($id_pelanggan, $nama, $alamat, $desa, $kecamatan, $kota, $telepon)
        {
            $simpan = "INSERT INTO ".$this->table." VALUES ('$id_pelanggan', '$nama', '$alamat', '$desa', '$kecamatan', '$kota', '$telepon','')";
            $result = $this->db->connect->query($simpan);
            if ($result == true) {
                //Flasher jika berhasil
                Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            } else {
                //Flasher jika gagal
                Flasher::setFlash('gagal', 'ditambahkan karena '.$this->db->connect->error, 'danger');
                //echo "insert failed";
                echo "Error: ".$simpan."<br>".$this->connect->error;
            }
        }
        public function hapuspelanggan($id_pelanggan)
        {
            $hapus = "DELETE FROM ".$this->table." WHERE id_pelanggan = '$id_pelanggan'";
            $result = $this->db->connect->query($hapus);
            if ($result == true) {
                //Flasher jika berhasil
                Flasher::setFlash('Berhasil', 'hapus data', 'success');
            //echo "delete success";
            } else {
                //Flasher jika gagal
                Flasher::setFlash('Gagal', 'dihapus karena '.$this->db->connect->error, 'danger');
                echo "Error: ".$hapus."<br>".$this->db->connect->error;
            }
        }
        //method untuk query update data
        public function updatepelanggan($id_pelanggan, $nama, $alamat, $desa, $kecamatan, $kota, $telepon)
        {
            $simpan = "UPDATE ".$this->table." SET nama = '$nama', alamat = '$alamat', desa = '$desa',
                        kecamatan = '$kecamatan', kota = '$kota', telepon = '$telepon'
                        WHERE id_pelanggan = '$id_pelanggan'";
            $result = $this->db->connect->query($simpan);
            if ($result == true) {
                //Flasher jika berhasil
                Flasher::setFlash('Berhasil', 'diubah', 'success');
            } else {
                //Flasher jika gagal
                Flasher::setFlash('gagal', 'diubah karena '.$this->db->connect->error, 'danger');
                //echo "insert failed";
                echo "Error: ".$simpan."<br>".$this->connect->error;
            }
        }
    }
