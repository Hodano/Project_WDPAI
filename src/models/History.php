<?php

class History
{

    private $descriptionHistory;
    private $historyDate;


    public function __construct( $descriptionHistory,$historyDate)
    {
        $this->descriptionHistory = $descriptionHistory;
        $this->historyDate=$historyDate;
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