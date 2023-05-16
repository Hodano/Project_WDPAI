<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/History.php';
class HistoryController extends AppController
{


    private $messages = [];

    public function history()
    {
        if ($this->isPost()) {

           $history= new History($_POST['dateOfHistoryCar'],$_POST['descriptionHistory']); /// sprawdzamy czy dodawanie działa.
            //dodawanie projektu, tak jak userów do zmiany

            return $this->render('history', ["messages" => $this->messages, "history" =>$history]);


        }

        return $this->render('history', ["messages" => $this->messages ]);

    }
}