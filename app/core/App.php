<?php
    class App{
        //properti untuk menentukan controller method dan parameter default
        protected $controller = 'Home';//defaulf controller home
        protected $method = 'index';//default method index
        protected $params = [];
        public function __construct(){
            $url = $this->parseURL();
            //var_dump($url);
            //controller
            if(file_exists('../app/controllers/' . $url[0] . '.php')){//ada tidak nama setelah public.php pada folder controllers
                $this->controller = $url[0];//kalau ada timpa $controller dengan controller yang baru
                unset($url[0]);//menghilangkan controller dari elemen array, supaya bisa mengambil $params
            }//jika tidak ada, panggil controller default

            //panggil controller
            require_once '../app/controllers/' . $this->controller . '.php';//ambil controller baru
            $this->controller = new $this->controller;//kelas di instansiasi supaya bisa memanggil methodnya

            //method
            if(isset($url[1])){
                if(method_exists($this->controller, $url[1])){//dari controller ada tidak methodnya
                    $this->method = $url[1];//kalau ada timpa
                    unset($url[1]);//sisanya hanya parameter, kalau ada
                }
            }

            //parameter
            if(!empty($url)){//jika parameter tidak kosong
                $this->params = array_values($url);//ambil data dari url dekudian dimasukkan ke $params
            }

            //jalankan controller & method, serta kirimkan params, jika ada
            call_user_func_array([$this->controller, $this->method], $this->params);
        }

        public function parseURL(){
            if( isset($_GET['url']) ){//mengambil url yang dikirimkan
                $url = rtrim($_GET['url'], '/');//menghapus tanda / di akhir
                $url = filter_var($url, FILTER_SANITIZE_URL);//membersihkan url dari karakter yang ngaco
                $url = explode('/', $url);//pecah url dari tanda /
                return $url;//mengembalikan data url
            }
        }
    }
?>
