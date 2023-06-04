<?php
require_once "Repository.php";
require_once __DIR__.'/../models/History.php';
require_once __DIR__.'/../models/Client.php';

class HistoryRepository extends Repository
{
    public function getHistory(): array{
        $historyArray = [];
        $stmt = $this ->database->connect()->prepare('SELECT * FROM history ');

        $stmt->execute();
        $history = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($history as $oneHist ){
            $historyArray[] = new History(
                $oneHist['description_history'],
                $oneHist['date_of_history_car'],
                $oneHist['car_id']
            );
        }
        return $historyArray;
    }

    public function getHistoryByCarId(int $carId): array{
        $historyArray = [];
        $stmt = $this ->database->connect()->prepare('SELECT * FROM history WHERE car_id = :car_id');
        $stmt->bindParam(":car_id", $carId);
        $stmt->execute();
        $history = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($history as $oneHist ){
            $historyArray[] = new History(
                $oneHist['description_history'],
                $oneHist['date_of_history_car'],
                $oneHist['car_id']
            );
        }
        return $historyArray;
    }
    public function getClientByCarId(int $carId): array {
        $clientArray = [];
        $stmt = $this->database->connect()->prepare('SELECT clients.name, clients.address, clients.phone_number, clients.email FROM cars JOIN clients ON cars.client_id = clients.id WHERE cars.id = :car_id');
        $stmt->bindParam(":car_id", $carId);
        $stmt->execute();
        $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($clients as $oneClient) {
            $clientArray[] = [
                'name' => $oneClient['name'],
                'address' => $oneClient['address'],
                'phone_number' => $oneClient['phone_number'],
                'email' => $oneClient['email']
            ];
        }
        return $clientArray;
    }

    public function addHistory(History $history):void{
        $stmt = $this ->database->connect()->prepare('INSERT INTO "history"(date_of_history_car, description_history, car_id) VALUES (?,?,?)');

        $date = $history->getHistoryDate();
        if(!$date)
        {
            $date = date('Y-m-d H:i:s');
        }

        $stmt->execute([
            $date,
            $history->getDescriptionHistory(),
            $history->getCarId()
        ]);
    }
}