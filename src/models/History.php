<?php

class History
{

    private $descriptionHistory;
    private $historyDate;
    private $carId;


    public function __construct( $descriptionHistory,$historyDate,$carID)
    {
        $this->descriptionHistory = $descriptionHistory;
        $this->historyDate=$historyDate;
        $this->carId = $carID;
    }


    public function getCarId():int
    {
        return $this->carId;
    }


    public function setCarId(int $carId): void
    {
        $this->carId = $carId;
    }



    public function getHistoryDate():string
    {
        return $this->historyDate;
    }

    public function setHistoryDate(string $historyDate): void
    {
        $this->historyDate = $historyDate;
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