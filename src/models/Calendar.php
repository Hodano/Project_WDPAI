<?php

class Calendar
{
    private $dateOfEvent;
    private $event;

    public function __construct($dateOfEvent, $event)
    {
        $this->dateOfEvent = $dateOfEvent;
        $this->event = $event;
    }


    public function getDateOfEvent():string
    {
        return $this->dateOfEvent;
    }


    public function setDateOfEvent(string $dateOfEvent): void
    {
        $this->dateOfEvent = $dateOfEvent;
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