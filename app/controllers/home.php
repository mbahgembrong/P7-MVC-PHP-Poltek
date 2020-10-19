<?php
    class Home extends Controller{
        public function index(){
            //memberikan data titile pada header
            $data['title'] = "Beranda";
            //mengambil tampilan Header
            $this->view('layouts/header', $data);
            //mengambil tampilan Navbar
            $this->view('layouts/navbar');
            //mengambil tampilan Content Beranda
            $this->view('home/index');
            //mengambil tampilan Footer
            $this->view('layouts/footer');
        }
    }
    
?>
