<?php
require_once "Repository.php";
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

        foreach ($clients as $client ){
            $clientsArray[] = new Client(
                $client['name'],
                $client['address'],
                $client['phone_number'],
                $client['email']
            );
        }
        return $clientsArray;
    }

    public function addClient(Client $client):void{
        $date = new DateTime();
        $stmt = $this ->database->connect()->prepare('INSERT INTO clients(name,address,phone_number,email,id_assigned_by)
        VALUES (?,?,?,?,?)
        ');

        $assignedById = 14; //Musi byc user z takim idikiem(chyba można wyjebac)

        $stmt->execute([
           $client->getNameAndSurname(),
            $client->getAddress(),
            $client->getPhoneNumber(),
            $client->getEmail(),
            $assignedById
        ]);

    }
}