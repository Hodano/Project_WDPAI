<?php
require_once "Repository.php";
require_once __DIR__.'/../models/History.php';
class HistoryRepository extends Repository
{
    public function addHistory(History $history):void{
        $date = new DateTime();
        $stmt = $this ->database->connect()->prepare('INSERT INTO "history"(date_of_history_car, description_history)
        VALUES (?,?)
        ');


        $stmt->execute([
            $date->format('Y-m-d'),
            $history->getDescriptionHistory()

        ]);

    }
}