<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/Car.php';
require_once __DIR__.'/../repository/CarRepository.php';
class CarController extends AppController
{


    private $messages = [];
    private $carRepository;

    public function __construct()
    {
        parent::__construct();
        $this->carRepository = CarRepository::getInstance();
    }
    public function addCar()
    {
        if ($this->isPost()) {

//             /// sprawdzamy czy dodawanie działa.
            $car = new Car($_POST['carModel'],$_POST['bodyType'],$_POST['yearProduction'],$_POST['carMileage'],$_POST['color']);
            //dodawanie projektu, tak jak userów do zmiany
            $this->carRepository->addCar($car);

            return $this->render('history', [
                'cars' => $this->carRepository->getCars(),
                "messages" => $this->messages]);


        }

        return $this->render('addCar', ["messages" => $this->messages ]); //dlaczego nas przenosi do addCar a nie history

    }
    public function car() {
        $cars = $this->carRepository->getCars();
        $this->render('history',['cars'=>$cars]);
    }


}