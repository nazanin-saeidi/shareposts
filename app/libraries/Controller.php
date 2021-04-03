<?php
    /*
     * Base Controller
     * Load Model in here
     * Load View in here
     */ 
    class Controller {
        //Load Model
        public function model($model) {
            require_once '../app/models/'. $model . '.php';
            return new $model;
        }

        //Load View
        public function view($view, $data = []) {
            if(file_exists('../app/views/'. $view . '.php')) {
                require_once '../app/views/'. $view . '.php';
            } else {
                die('View does not exist!');
            }
        }
    }