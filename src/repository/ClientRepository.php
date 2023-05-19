<?php
require_once "Repository.php";
require_once __DIR__.'/../models/Client.php';
class ClientRepository extends Repository
{
    public function getClient( string $name): ?Client{
        $stmt = $this ->database->concect()->prepare('SELECT * FROM public.client WHERE name = :name');
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
}