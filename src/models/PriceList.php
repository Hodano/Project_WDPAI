<?php

class PriceList
{
    private $nameOfService;
    private $prices;

    public function __construct($nameOfService, $prices)
    {
        $this->nameOfService = $nameOfService;
        $this->prices = $prices;
    }

    public function getNameOfService():string
    {
        return $this->nameOfService;
    }


    public function setNameOfService( string $nameOfService): void
    {
        $this->nameOfService = $nameOfService;
    }

    public function getPrices():float
    {
        return $this->prices;
    }


    public function setPrices(float $prices): void
    {
        $this->prices = $prices;
    }



}