<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/PriceList.php';
require_once __DIR__.'/../repository/PriceListRepository.php';
class PriceListController extends AppController
{
    private $messages = [];
    private $priceListRepository;

    public function __construct()
    {
        parent::__construct();
        $this->priceListRepository = PriceListRepository::getInstance();
    }


    public function priceList()
    {
        if ($this->isPost()) {

            $priceList = new PriceList($_POST['nameOfService'],$_POST['prices']); /// sprawdzamy czy dodawanie działa.
            $this->priceListRepository->addPriceList($priceList);

            return $this->render('priceList', ["messages" => $this->messages, "priceList" =>$priceList]);


        }

        return $this->render('priceList', ["messages" => $this->messages ]);

    }
}