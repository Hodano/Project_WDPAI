<?php
require_once "Repository.php";
require_once __DIR__.'/../models/History.php';

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