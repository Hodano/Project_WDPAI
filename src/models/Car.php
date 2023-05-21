<?php

class Car
{
    private $carModel;
    private $bodyType;
    private $yearOfProduction;
    private $carMileage;
    private $color;
    private $history;
    /// dodanie historii ale to później

    public function __construct($carModel, $bodyType, $yearOfProduction, $carMileage, $color)
    {
        $this->carModel = $carModel;
        $this->bodyType = $bodyType;
        $this->yearOfProduction = $yearOfProduction;
        $this->carMileage = $carMileage;
        $this->color = $color;

    }








    public function getCarModel():string
    {
        return $this->carModel;
    }


    public function setCarModel(string $carModel): void
    {
        $this->carModel = $carModel;
    }

    public function getBodyType():string
    {
        return $this->bodyType;
    }

    public function setBodyType(string $bodyType): void
    {
        $this->bodyType = $bodyType;
    }


    public function getYearOfProduction():int
    {
        return $this->yearOfProduction;
    }


    public function setYearOfProduction(int $yearOfProduction): void
    {
        $this->yearOfProduction = $yearOfProduction;
    }


    public function getCarMileage():int
    {
        return $this->carMileage;
    }


    public function setCarMileage(int $carMileage): void
    {
        $this->carMileage = $carMileage;
    }


    public function getColor():string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }



}