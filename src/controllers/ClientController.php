<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Client.php';
class ClientController extends AppController
{

    private $messages = [];

    public function addClient()
    {
        if ($this->isPost()) {

            $client = new Client($_POST['nameAndSurname'],$_POST['address'],$_POST['phoneNumber'],$_POST['email'],$_POST['cars']); /// sprawdzamy czy dodawanie działa.
            //dodawanie projektu, tak jak userów do zmiany

            return $this->render('clients', ["messages" => $this->messages, "client" =>$client]);


        }

        return $this->render('addClient', ["messages" => $this->messages ]);

    }
}