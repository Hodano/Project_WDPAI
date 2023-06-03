<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/Car.php';
require_once __DIR__.'/../repository/CarRepository.php';
require_once __DIR__.'/../repository/ClientRepository.php';
class CarController extends AppController
{


    private $messages = [];
    private $carRepository;
    private $clientRepository;

    public function __construct()
    {
        parent::__construct();
        $this->carRepository = CarRepository::getInstance();
        $this->clientRepository = ClientRepository::getInstance();
    }
    public function addCarPost()
    {
        if ($this->isPost()) {
            // sprawdzamy czy dodawanie działa.
            $car = new Car($_POST['carModel'],$_POST['bodyType'],$_POST['yearProduction'],$_POST['carMileage'],$_POST['color'], 0, $_POST['clientId']);

            //dodawanie projektu, tak jak userów do zmiany
            $this->carRepository->addCar($car);

            return $this->render('history', [
                'cars' => $this->carRepository->getCars(),
                "messages" => $this->messages]);
        }

        return $this->render('addCar', ["messages" => $this->messages ]); //dlaczego nas przenosi do addCar a nie history

    }
    public function addCar(){
        return $this->render('addCar',["messages" =>$this->messages]);
    }

    public function history() {
        $cars = $this->carRepository->getCars();
        $this->render('history',['cars'=>$cars]);
    }


}