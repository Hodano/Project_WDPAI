<?php
require_once "Repository.php";
require_once "HistoryRepository.php";
require_once __DIR__.'/../models/Car.php';
class CarRepository extends Repository
{
    public function getCars(): array{
        $carsArray = [];
        $stmt = $this ->database->connect()->prepare("SELECT * FROM cars");

        $stmt->execute();
        $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $historyRepository = HistoryRepository::getInstance();

        foreach ($cars as $car){
            $history = $historyRepository->getHistoryByCarId($car['id']);
            $newCar = new Car(
                $car['car_model'],
                $car['body_type'],
                $car['year_of_production'],
                $car['car_mileage'],
                $car['color'],
                $car['id']
            );
            $newCar->setHistory($history);

            $carsArray[] = $newCar;
        }
        return $carsArray;
    }

    public function addCar(Car $car):void{
        $stmt = $this ->database->connect()->prepare('INSERT INTO cars(car_model, body_type, year_of_production, car_mileage, color) VALUES (?,?,?,?,?)');

        $stmt->execute([
            $car->getCarModel(),
            $car->getBodyType(),
            $car->getYearOfProduction(),
            $car->getCarMileage(),
            $car->getColor()
        ]);

    }
}