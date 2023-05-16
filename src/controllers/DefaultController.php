<?php

require_once 'AppController.php';
class DefaultController extends AppController{
    public function index() {
        $this->render('login');
    }

    public function clients() {
        $this->render('clients');
    }

    public function history() {
        $this->render('history');
    }

    public function calendar() {
        $this->render('calendar');
    }

    public function priceList() {
        $this->render('priceList');
    }

//    public function add_client() {
//        $this->render('addClient'); /// chyba robię to drugi raz w ClientController
//    }

//    public function add_car(){
//        $this->render('add_car');
//    }
    
    
    
    

}

?>