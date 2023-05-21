<?php

class Calendar
{

    private $event;

    public function __construct($event)
    {
        $this->event = $event;
    }






    public function getEvent():string
    {
        return $this->event;
    }


    public function setEvent(string $event): void
    {
        $this->event = $event;
    }


}