<?php
require_once "Repository.php";
require_once __DIR__.'/../models/Calendar.php';
class CalendarRepository extends Repository
{
    public function addCalendar(Calendar $calendar): void
    {
        $stmt = $this->database->concect()->prepare('INSERT INTO calander(date_of_event, event)
        VALUES (?,?)
        ');

        $assignedById = 3; //Musi byc user z takim idikiem(chyba można wyjebac)

        $stmt->execute([
            $calendar->getDateEvent(),
            $calendar->getEvent()
        ]);
    }
    public function getCalendar(): array{
        $calendarArray = [];
        $stmt = $this ->database->concect()->prepare('
        SELECT * FROM "calander" ');

        $stmt->execute();
        $calendar = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($calendar as $term ){
            $calendarArray[] = new Calendar(
                $term['event'],
                $term['date_of_event'],
            );
        }
        return $calendarArray;
    }

}