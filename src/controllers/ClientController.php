<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Client.php';
require_once __DIR__.'/../repository/ClientRepository.php';
require_once __DIR__.'/../repository/CarRepository.php';
class ClientController extends AppController
{

    private $messages = [];
    private $clientRepository;


    public function __construct()
    {
        parent::__construct();
        $this->clientRepository = new ClientRepository();
    }


    public function addClientPost()
    {
        if ($this->isPost()) {
            $client = new Client($_POST['nameAndSurname'],$_POST['address'],$_POST['phoneNumber'],$_POST['email']);
            $this->clientRepository->addClient($client);
            return $this->render('clients', [
                'clients' => $this->clientRepository->getClients(),
                "messages" => $this->messages
            ]);
        }

        return $this->render('addClient', ["messages" => $this->messages]);
    }

    public function addClient()
    {
        return $this->render('addClient', ["messages" => $this->messages ]);
    }

    public function clients() {
        $clients = $this->clientRepository->getClients();
        return $this->render('clients',['clients' => $clients]);
    }


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