<?php
require_once "Repository.php";
require_once "CarRepository.php";
require_once __DIR__.'/../models/Client.php';
class ClientRepository extends Repository
{
    public function getClientByName( string $name) {
        $name = '%'.strtolower($name).'%';
        $stmt = $this ->database->connect()->prepare('SELECT * FROM public.clients WHERE LOWER(name) LIKE :search_name');
        $stmt->bindParam(':search_name',$name,PDO::PARAM_STR);
        $stmt->execute();

        return  $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getClients(): array{
        $clientsArray = [];
        $stmt = $this ->database->connect()->prepare("
        SELECT * FROM clients");

        $stmt->execute();
        $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $carRepository = new CarRepository();

        foreach ($clients as $client ){
            $cars = $carRepository->getCarByClientId($client['id']);
            $newClient = new Client(
                $client['name'],
                $client['address'],
                $client['phone_number'],
                $client['email'],
                $client['id']
            );
            $newClient->setCars($cars);
            $clientsArray[] = $newClient;
        }
        return $clientsArray;
    }




    public function addClient(Client $client):void{
        $date = new DateTime();
        $stmt = $this ->database->connect()->prepare('INSERT INTO clients(name,address,phone_number,email)
        VALUES (?,?,?,?)
        ');



        $stmt->execute([
           $client->getNameAndSurname(),
            $client->getAddress(),
            $client->getPhoneNumber(),
            $client->getEmail(),
        ]);

    }
}