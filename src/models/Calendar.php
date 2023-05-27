<?php

class Calendar
{
    private $dateEvent;

    private $event;

    public function __construct($event,$dateEvent )
    {
        $this->event = $event;
        $this->dateEvent = $dateEvent;
    }






    public function getEvent():string
    {
        return $this->event;
    }


    public function setEvent(string $event): void
    {
        $this->event = $event;
    }


    public function getDateEvent():string
    {
        return $this->dateEvent;
    }


    public function setDateEvent(string $dateEvent): void
    {
        $this->dateEvent = $dateEvent;
    }



}