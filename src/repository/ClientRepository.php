<?php
require_once "Repository.php";
require_once __DIR__.'/../models/Client.php';
class ClientRepository extends Repository
{
    public function getClient( string $name): ?Client{
        $stmt = $this ->database->concect()->prepare('SELECT * FROM public.clients WHERE name = :name');
        $stmt->bindParam(':name',$name,PDO::PARAM_STR);
        $stmt->execute();

        $client = $stmt->fetch(PDO::FETCH_ASSOC);

        if($client == false){
            throw new Exception("Client not found in database");
        }
        return new Client(
            $client['name'],
            $client['address'],
            $client['phone_number'],
            $client['email']
            #cars
        );
    }
    public function addClient(Client $client):void{
        $date = new DateTime();
        $stmt = $this ->database->concect()->prepare('INSERT INTO clients(name,address,phone_number,email,id_assigned_by)
        VALUES (?,?,?,?,?)
        ');

        $assignedById = 3;

        $stmt->execute([
           $client->getNameAndSurname(),
            $client->getAddress(),
            $client->getPhoneNumber(),
            $client->getEmail(),
            $assignedById
        ]);

    }
}