<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Calendar.php';
class CalendarController extends AppController
{
    private $messages = [];

    public function calendar()
    {
        if ($this->isPost()) {

            $calendar = new Calendar($_POST['dateOfEvent'],$_POST['event']); /// sprawdzamy czy dodawanie działa.
            //dodawanie projektu, tak jak userów do zmiany

            return $this->render('calendar', ["messages" => $this->messages, "calendar" =>$calendar]);


        }

        return $this->render('calendar', ["messages" => $this->messages ]);

    }
}