<?php
require_once "Repository.php";
require_once __DIR__.'/../models/Car.php';
class CarRepository extends Repository
{
    public function addCar(Car $car):void{
        $stmt = $this ->database->concect()->prepare('INSERT INTO cars(car_model, body_type, year_of_production, car_mileage, color)
        VALUES (?,?,?,?,?)
        ');


        $stmt->execute([
            $car->getCarModel(),
            $car->getBodyType(),
            $car->getYearOfProduction(),
            $car->getCarMileage(),
            $car->getColor()
        ]);

    }
}