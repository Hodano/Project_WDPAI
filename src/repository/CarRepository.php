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
                $car['id'],
                $car['client_id']
            );
            $newCar->setHistory($history);

            $carsArray[] = $newCar;
        }
        return $carsArray;
    }
    public function getCarByClientId(int $clientId):array{
        $carsArray = [];
        $stmt = $this ->database->connect()->prepare('SELECT * FROM cars WHERE client_id= :client_id');
        $stmt->bindParam(":client_id", $clientId);
        $stmt->execute();
        $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($cars as $oneCar ){
            $carsArray[] = new Car(
                $oneCar['car_model'],
                $oneCar['body_type'],
                $oneCar['year_of_production'],
                $oneCar['car_mileage'],
                $oneCar['color'],
                $oneCar['id'],
                $oneCar['client_id'],

            );
        }
        return $carsArray;
    }

    public function addCar(Car $car):void{
        $stmt = $this ->database->connect()->prepare('INSERT INTO cars(car_model, body_type, year_of_production, car_mileage, color, client_id) VALUES (?,?,?,?,?,?)');

        $stmt->execute([
            $car->getCarModel(),
            $car->getBodyType(),
            $car->getYearOfProduction(),
            $car->getCarMileage(),
            $car->getColor(),
            $car->getClientId()
        ]);

    }
}