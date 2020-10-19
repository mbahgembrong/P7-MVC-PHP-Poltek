<?php
//file .htacces adalah file yang di gunakan untuk memodifikasi mengkonfigurasi dari server apache
if(!session_id()){
    session_start();
}

require_once '../app/init.php';

$app = new App();//memanggil class app


?>