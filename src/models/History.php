<?php

class History
{
    private $dateOfHistoryCar;
    private $descriptionHistory;


    public function __construct($dateOfHistoryCar, $descriptionHistory)
    {
        $this->dateOfHistoryCar = $dateOfHistoryCar;
        $this->descriptionHistory = $descriptionHistory;
    }

    public function getDateOfHistoryCar():string
    {
        return $this->dateOfHistoryCar;
    }


    public function setDateOfHistoryCar(string $dateOfHistoryCar): void
    {
        $this->dateOfHistoryCar = $dateOfHistoryCar;
    }


    public function getDescriptionHistory():string
    {
        return $this->descriptionHistory;
    }


    public function setDescriptionHistory(string $descriptionHistory): void
    {
        $this->descriptionHistory = $descriptionHistory;
    }



}