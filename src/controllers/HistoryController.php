<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/History.php';
require_once __DIR__.'/../repository/HistoryRepository.php';
class HistoryController extends AppController
{


    private $messages = [];
    private $historyRepository;

    public function __construct()
    {
        parent::__construct();
        $this->historyRepository=HistoryRepository::getInstance();
    }


    public function history()
    {
        if ($this->isPost()) {

           $history= new History($_POST['descriptionHistory']); /// sprawdzamy czy dodawanie działa.
            //dodawanie projektu, tak jak userów do zmiany
            $this->historyRepository->addHistory($history);

            return $this->render('history', ["messages" => $this->messages, "history" =>$history]);


        }

        return $this->render('history', ["messages" => $this->messages ]);

    }

    public function car() {
        $cars = $this->carRepository->getCars();
        $this->render('history',['cars'=>$cars]);
    }
}