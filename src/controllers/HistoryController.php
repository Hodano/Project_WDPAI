<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/History.php';
require_once __DIR__.'/../repository/HistoryRepository.php';
require_once __DIR__.'/../repository/CarRepository.php';
class HistoryController extends AppController
{


    private $messages = [];
    private $historyRepository;
    private $carRepository;

    public function __construct()
    {
        parent::__construct();
        $this->historyRepository= HistoryRepository::getInstance();
        $this->carRepository = CarRepository::getInstance();
    }


    public function history()
    {
        if ($this->isPost()) {

            $idCar = $_POST["id"];
//            #dateHistory = $_POST["historyDate"];
            $descriptionHistory = $_POST["descriptionHistory"];
           $history= new History($_POST['descriptionHistory'],$_POST["historyDate"]); /// sprawdzamy czy dodawanie działa.
            //dodawanie projektu, tak jak userów do zmiany
            $this->historyRepository->addHistory($history);


            $cars = $this->carRepository->getCars();
            $this->render('history',['cars'=>$cars]);

            return $this->render('history', ["messages" => $this->messages, "history" =>$history]);


        }

        return $this->render('history', ["messages" => $this->messages ]);

    }


}