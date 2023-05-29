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


    public function addClientPost()
    {

        if ($this->isPost()) {

            $client = new Client($_POST['nameAndSurname'],$_POST['address'],$_POST['phoneNumber'],$_POST['email'],$_POST['cars']); /// sprawdzamy czy dodawanie działa.
            //dodawanie projektu, tak jak userów do zmiany
            $this->clientRepository->addClient($client);
            return $this->render('clients', [
                'clients' => $this->clientRepository->getClients(),
                "messages" => $this->messages]);
            ///Raczej ten return do wyjebania bo tam dodaje


        }

        return $this->render('addClient', ["messages" => $this->messages ]);

    }

    public function addClient()
    {
        return $this->render('addClient', ["messages" => $this->messages ]);
    }

    public function clients() { /// views all data
        $clients = $this->clientRepository->getClients();
        $this->render('clients',['clients' => $clients]);
    }
//    ///Jakby było trzeba.
//    public function getClientByName(){
//        $clientRepository = ClientRepository::getInstance();
//
//        if(!$this->isPost()){
//            $this->render('clients');
//        }
//        $name = $_POST['nameAndSurname'];
//
//        try {
//            $client = $clientRepository->getClient($name);
//        } catch (Exception $e1){
//            return $this->render('clients', ['messages' => ['User no exist!']]);
//        }
//
//        return $this->render('clients', ["messages" => $this->messages, "client" =>$client]);
//    }

    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->clientRepository->getClientByName($decoded['search']));
        }
    }

}