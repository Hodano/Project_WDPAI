<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Client.php';
require_once __DIR__.'/../repository/ClientRepository.php';
class ClientController extends AppController
{

    private $messages = [];
    private $clientRepository;

    public function __construct()
    {
        parent::__construct();
        $this->clientRepository = ClientRepository::getInstance();
    }


    public function addClient()
    {

        if ($this->isPost()) {

            $client = new Client($_POST['nameAndSurname'],$_POST['address'],$_POST['phoneNumber'],$_POST['email'],$_POST['cars']); /// sprawdzamy czy dodawanie działa.
            //dodawanie projektu, tak jak userów do zmiany
            $this->clientRepository->addClient($client);
            return $this->render('clients', ["messages" => $this->messages, "client" =>$client]);


        }

        return $this->render('addClient', ["messages" => $this->messages ]);

    }
    ///Jakby było trzeba.
    public function getClientByName(){
        $clientRepository = ClientRepository::getInstance();

        if(!$this->isPost()){
            $this->render('clients');
        }
        $name = $_POST['nameAndSurname'];

        try {
            $client = $clientRepository->getClient($name);
        } catch (Exception $e1){
            return $this->render('clients', ['messages' => ['User no exist!']]);
        }

        return $this->render('clients', ["messages" => $this->messages, "client" =>$client]);
    }
}