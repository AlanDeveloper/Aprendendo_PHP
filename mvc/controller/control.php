<?php 
    class Controller {
        private $view;
        private $model;

        public function __construct() {
            $this->view = new View;
            $this->model = new Model;

            $this->view->load();

            // $_REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI'); // Pega a URL
        }
    }
?>