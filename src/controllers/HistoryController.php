<?php
require_once 'AppController.php';
require_once __DIR__ . '/../models/History.php';
require_once __DIR__.'/../repository/HistoryRepository.php';
require_once __DIR__.'/../repository/CarRepository.php';
require_once __DIR__.'/../repository/ClientRepository.php';
class HistoryController extends AppController
{


    private $messages = [];
    private $historyRepository;
    private $carRepository;


    public function __construct()
    {
        parent::__construct();
        $this->historyRepository= new HistoryRepository();
        $this->carRepository = new CarRepository();

    }


    public function history()
    {
        if ($this->isPost()) {
            $history= new History($_POST['descriptionHistory'], $_POST["historyDate"], $_POST["id"]);
            $this->historyRepository->addHistory($history);
            header('Location: /history');
        }
        if($this->isGet())
        {
            $cars = $this->carRepository->getCars();
            $this->render('history',['cars'=>$cars]);
        }
    }
}