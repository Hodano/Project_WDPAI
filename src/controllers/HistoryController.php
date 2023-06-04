<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/History.php';
require_once __DIR__.'/../repository/HistoryRepository.php';
require_once __DIR__.'/../repository/CarRepository.php';
require_once __DIR__.'/../repository/ClientRepository.php';
class HistoryController extends AppController
{


    private $messages = [];
    private $historyRepository;
    private $carRepository;
    private $clientController;

    public function __construct()
    {
        parent::__construct();
        $this->historyRepository= HistoryRepository::getInstance();
        $this->carRepository = CarRepository::getInstance();
        $this->clientController = ClientRepository::getInstance();
    }


    public function history()
    {
        if ($this->isPost()) {
            $history= new History($_POST['descriptionHistory'], $_POST["historyDate"], $_POST["id"]);
            $this->historyRepository->addHistory($history);
            header('Location: /history');
        }
    }
}