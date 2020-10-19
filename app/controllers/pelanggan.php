<?php
    class Pelanggan extends Controller
    {
        public function index()
        {
            //memberikan data title pada header
            $data['title'] = "Pelanggan";
            //mengambil data nama toko
            // $data['nama'] = $this->model('pelanggan_model')->getNamaToko();
            //mengambil data dari pelanggan model, dengan method db_pelanggan
            $data['pelanggan'] = $this->model('pelanggan_model')->db_pelanggan();

            //mengambil tampilan
            $this->view('layouts/header', $data);
            $this->view('layouts/navbar');
            $this->view('pelanggan/index', $data);
            $this->view('layouts/footer');
        }
        public function detail($id)
        {
            //memberikan data title pada pelanggan
            $data['title'] = "Detail Pelanggan";
            //mengambil data dari pelanggan model, dengan method pelangganByID
            $data['pelanggan'] = $this->model('pelanggan_model')->pelangganById($id);
            //mengambil tampilan
            $this->view('layouts/header', $data);
            $this->view('layouts/navbar');
            $this->view('pelanggan/detail', $data);
            $this->view('layouts/footer');
        }
        public function input()
        {
            $id_pelanggan = $_POST['id_pelanggan'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $desa = $_POST['desa'];
            $kecamatan = $_POST['kecamatan'];
            $kota = $_POST['kota'];
            $telepon = $_POST['telepon'];
            $this->model('pelanggan_model')->tambahpelanggan($id_pelanggan, $nama, $alamat, $desa, $kecamatan, $kota, $telepon);

            header('Location:'.BASEURL.'/pelanggan');
        }
        public function delete($id_pelanggan)
        {
            //mengirim data kedalam model
            $this->model('pelanggan_model')->hapuspelanggan($id_pelanggan);

            //redirect setelah berhasil delete data
            header('Location:'.BASEURL.'/pelanggan');
        }

        public function update()
        {
            $id_pelanggan = $_POST['id_pelanggan'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $desa = $_POST['desa'];
            $kecamatan = $_POST['kecamatan'];
            $kota = $_POST['kota'];
            $telepon = $_POST['telepon'];
            //mengirim data kedalam model
            $this->model('pelanggan_model')->updatepelanggan($id_pelanggan, $nama, $alamat, $desa, $kecamatan, $kota, $telepon);
            //redirect setelah berhasil simpan data
            header('Location:' .BASEURL.'/pelanggan');
        }
    }
