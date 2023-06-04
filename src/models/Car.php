<?php

class Car
{
    private $id;
    private $clientId;
    private $carModel;
    private $bodyType;
    private $yearOfProduction;
    private $carMileage;
    private $numberVIN;
    private $history;
    private $clientName;

    public function __construct( $carModel, $bodyType, $yearOfProduction, $carMileage, $numberVIN,$id=0,$clientId = 0)
    {

        $this->carModel = $carModel;
        $this->bodyType = $bodyType;
        $this->yearOfProduction = $yearOfProduction;
        $this->carMileage = $carMileage;
        $this->numberVIN = $numberVIN;
        $this->id = $id;
        $this->clientId = $clientId;
    }


    public function getClientId():int
    {
        return $this->clientId;
    }


    public function setClientId(int $clientId): void
    {
        $this->clientId = $clientId;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
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


    public function getNumberVIN():string
    {
        return $this->numberVIN;
    }

    public function setColor(string $numberVIN): void
    {
        $this->numberVIN = $numberVIN;
    }

    public function getHistory(): array
    {
        return $this->history;
    }

    public function setHistory(array $history): void
    {
        $this->history = $history;
    }


    public function getClientName():string
    {
        return $this->clientName;
    }


    public function setClientName(string $clientName): void
    {
        $this->clientName = $clientName;
    }

}