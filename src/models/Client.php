<?php

class Client
{
    private $nameAndSurname;
    private $address;
    private $phoneNumber;
    private $email;
    private $cars; //Lista samochodów

    public function __construct($nameAndSurname, $address, $phoneNumber, $email, $cars = " ")
    {
        $this->nameAndSurname = $nameAndSurname;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->cars = $cars; /// zmienić na new Car;
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

    public function getCars():string
    {                                           //zmien na array bo każdy moze miec wiecej samochodów.
        return $this->cars;
    }


    public function setCars(string $cars): void
    {
        $this->cars = $cars;
    }



}