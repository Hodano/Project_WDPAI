<?php
require_once "Repository.php";
require_once __DIR__.'/../models/Calendar.php';
class CalendarRepository extends Repository
{
    public function addCalendar(Calendar $calendar):void{
        $date = new DateTime();
        $stmt = $this ->database->concect()->prepare('INSERT INTO calander(date_of_event, event)
        VALUES (?,?)
        ');

        $assignedById = 3; //Musi byc user z takim idikiem(chyba można wyjebac)

        $stmt->execute([
            $date->format('y-m-d'),
            $calendar->getEvent()
        ]);

    }
}