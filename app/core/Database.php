<?php
    class Database{
        //property untuk mengakses database
        private $host = DB_HOST;
        private $username = DB_USER;
        private $pass = DB_PASS;
        private $db = DB_NAME;
        public $connect;

        //method untuk koneksi database
        public function __construct(){
            $this->connect = new mysqli($this->host, $this->username, $this->pass, $this->db);
            if( !$this->connect){
                echo "Connection failed " . mysqli_connect_error();
            }else{
                //echo "Koneksi sukses";
            }
        }
    }
?>