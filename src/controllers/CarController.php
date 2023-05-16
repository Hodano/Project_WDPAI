<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/Car.php';
class CarController extends AppController
{


    private $messages = [];

    public function addCar()
    {
        if ($this->isPost()) {

//             /// sprawdzamy czy dodawanie działa.
            $car = new Car($_POST['carModel'],$_POST['bodyType'],$_POST['yearProduction'],$_POST['carMileage'],$_POST['color'], $_POST['clientName']);
            //dodawanie projektu, tak jak userów do zmiany

            return $this->render('history', ["messages" => $this->messages, "car" =>$car]);


        }

        return $this->render('addCar', ["messages" => $this->messages ]); //dlaczego nas przenosi do addCar a nie history

    }


}