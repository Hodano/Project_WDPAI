<?php

require_once 'AppController.php';
class DefoultController extends AppController{
    public function index() {
        $this->render('login');
    }

    public function clients() {
        $this->render('clients');
    }

    public function history() {
        $this->render('history');
    }

    public function calander() {
        $this->render('calander');
    }

    public function price_list() {
        $this->render('price-list');
    }

    public function add_client() {
        $this->render('add_client');
    }
    
    public function add_car(){
        $this->render('add_car');
    }
    
    
    
    

}

?>