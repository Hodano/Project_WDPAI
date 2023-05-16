<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/PriceList.php';
class PriceListController extends AppController
{
    private $messages = [];

    public function priceList()
    {
        if ($this->isPost()) {

            $priceList = new PriceList($_POST['nameOfService'],$_POST['prices']); /// sprawdzamy czy dodawanie działa.
            //dodawanie projektu, tak jak userów do zmiany

            return $this->render('priceList', ["messages" => $this->messages, "priceList" =>$priceList]);


        }

        return $this->render('priceList', ["messages" => $this->messages ]);

    }
}