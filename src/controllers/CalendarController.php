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
        parent::__construct();
        $this->calendarRepository = CalendarRepository::getInstance();
    }

    public function calendar()
    {
        if ($this->isPost()) {


            $calendar = new Calendar($_POST ['event'], $_POST['dateEvent']); /// sprawdzamy czy dodawanie działa.
            $this->calendarRepository->addCalendar($calendar);

            return $this->render('calendar', [
                'calendar'=>$this->calendarRepository->getCalendar(),
                "messages" => $this->messages]);

        }
        if($this->isGet())
        {
            $calendar = $this->calendarRepository->getCalendar();
            return $this->render('calendar',['calendar' =>$calendar]);
        }

        return $this->render('calendar', ["messages" => $this->messages ]);
    }
}