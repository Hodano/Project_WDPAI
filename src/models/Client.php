<?php

class Client
{
    private $nameAndSurname;
    private $address;
    private $phoneNumber;
    private $email;
    private $id;
    private $cars; //Lista samochodów

    public function __construct($nameAndSurname, $address, $phoneNumber, $email,$id = 0)
    {
        $this->id = $id;
        $this->nameAndSurname = $nameAndSurname;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;

    }


    public function getId():int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCars(): array
    {
        return $this->cars;
    }

    public function setCars(array $cars): void
    {
        $this->cars = $cars;
    }

    public function addCar(Car $car): void
    {
        $this->cars[] = $car;
    }

    public function getNameAndSurname():string
    {
        return $this->nameAndSurname;
    }


    public function setNameAndSurname(string $nameAndSurname): void
    {
        $this->nameAndSurname = $nameAndSurname;
    }

    public function getAddress():string
    {
        return $this->address;
    }


    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getPhoneNumber():int
    {
        return $this->phoneNumber;
    }


    public function setPhoneNumber(int $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }


    public function getEmail():string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }




}