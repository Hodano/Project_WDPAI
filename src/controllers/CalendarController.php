<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Calendar.php';
require_once __DIR__.'/../repository/CalendarRepository.php';
class CalendarController extends AppController
{
    private $messages = [];
    private $calendarRepository;

    public function __construct()
    {
        $this->calendarRepository = CalendarRepository::getInstance();
    }


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