<?php
    class Pegawai extends Controller
    {
        public function index()
        {
            //memberikan data title pada header
            $data['title'] = "Pegawai";
            //mengambil data nama toko

            //mengambil data dari pelanggan model, dengan method db_pelanggan
            $data['pegawai'] = $this->model('pegawai_model')->db_pegawai();

            //mengambil tampilan
            $this->view('layouts/header', $data);
            $this->view('layouts/navbar');
            $this->view('pegawai/index', $data);
            $this->view('layouts/footer');
        }

        public function detail($id)
        {
            //memberikan data title pada pegawai
            $data['title'] = "Detail Pegawai";
            //mengambil data dari pegawai model, dengan method pegawaiByID
            $data['pegawai'] = $this->model('pegawai_model')->pegawaiById($id);
            //mengambil tampilan
            $this->view('layouts/header', $data);
            $this->view('layouts/navbar');
            $this->view('pegawai/detail', $data);
            $this->view('layouts/footer');
        }
        public function update()
        {
            $id_pegawai = $_POST['id_pegawai'];
            $nama_pegawai = $_POST['nama_pegawai'];
            $telepon = $_POST['telepon'];
            $jabatan = $_POST['jabatan'];
            $kode_wilayah = $_POST['kode_wilayah'];
            //mengirim data kedalam model
            $this->model('pegawai_model')->updatepegawai($id_pegawai, $nama_pegawai, $telepon, $kode_wilayah, $jabatan);
            //redirect setelah berhasil simpan data
            header('Location:' .BASEURL.'/pegawai');
        }

        public function delete($id_pegawai)
        {
            //mengirim data kedalam model
            $this->model('pegawai_model')->hapuspegawai($id_pegawai);

            //redirect setelah berhasil delete data
            header('Location:'.BASEURL.'/pegawai');
        }
        public function input()
        {
            $id_pegawai = $_POST['id_pegawai'];
            $nama_pegawai = $_POST['nama_pegawai'];
            $telepon = $_POST['telepon'];
            $jabatan = $_POST['jabatan'];
            $kode_wilayah = $_POST['kode_wilayah'];
            //mengirim data kedalam model
            $this->model('pegawai_model')->tambahpegawai($id_pegawai, $nama_pegawai, $telepon, $kode_wilayah, $jabatan);
            //redirect setelah berhasil simpan data
            header('Location:' .BASEURL.'/pegawai');
        }
    }
