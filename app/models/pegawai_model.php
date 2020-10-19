<?php
    class pegawai_model
    {
        private $table = 'pegawai';
        private $db;
        public function __construct()
        {
            $this->db = new Database;
        }

        //method untuk query database
        public function db_pegawai()
        {
            $data = "SELECT * FROM pegawai";
            $result = $this->db->connect->query($data);
            while ($i = mysqli_fetch_array($result)) {
                $datapegawai[] = $i;
            }
            if (isset($datapegawai)) {
                return $datapegawai;
            }
        }
        //method untuk query byID
        public function pegawaiById($id)
        {
            $data = "SELECT * FROM ".$this->table." WHERE id_pegawai = '$id'";
            $result = $this->db->connect->query($data);
            while ($i = mysqli_fetch_array($result)) {
                $datapegawai[] = $i;
            }
            return $datapegawai;
        }
        //method untuk query tambah data
        public function tambahpegawai($id_pegawai, $nama_pegawai, $telepon, $kode_wilayah, $jabatan)
        {
            $simpan = "INSERT INTO ".$this->table." VALUES ('$id_pegawai', '$nama_pegawai', '$telepon', '$kode_wilayah', '$jabatan','','','')";
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
        //method untuk query update data
        public function updatepegawai($id_pegawai, $nama_pegawai, $telepon, $kode_wilayah, $jabatan)
        {
            $simpan = "UPDATE ".$this->table." SET nama_pegawai = '$nama_pegawai', telepon = '$telepon', kode_wilayah = '$kode_wilayah', jabatan = '$jabatan'
                        WHERE id_pegawai = '$id_pegawai'";
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

        public function hapuspegawai($id_pegawai)
        {
            $hapus = "DELETE FROM ".$this->table." WHERE id_pegawai = '$id_pegawai'";
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
    }
