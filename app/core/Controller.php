<?php
    class Controller {
        public function view($view, $data = []){
            //mencari file didalam folder app->views
            require_once '../app/views/' .$view. '.php';
        }

        public function model($model){
            //mencari file didalam folder app->app models
            require_once '../app/models/' .$model. '.php';
                return new $model;
        }
    }
?>
