<?php

class History
{

    private $descriptionHistory;


    public function __construct( $descriptionHistory)
    {
        $this->descriptionHistory = $descriptionHistory;
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