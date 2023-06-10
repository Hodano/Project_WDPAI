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
        $this->priceListRepository = new PriceListRepository();
    }


    public function priceList()
    {
        if ($this->isPost()) {

            $priceList = new PriceList($_POST['nameOfService'],$_POST['prices']); /// sprawdzamy czy dodawanie działa.
            $this->priceListRepository->addPriceList($priceList);

            return $this->render('priceList', [
                'priceList' =>$this->priceListRepository->getPriceList(),
                "messages" => $this->messages]);


        }
        if($this->isGet())
        {
           $priceList = $this->priceListRepository->getPriceList();
           return $this->render('priceList',['priceList' =>$priceList]);
        }
        return $this->render('priceList', ["messages" => $this->messages ]);

    }
}