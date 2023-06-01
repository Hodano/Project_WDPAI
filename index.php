<?php
require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', "DefaultController");
Routing::get('history', "HistoryController");
Routing::get('history', "CarController");
Routing::get('calendar', "CalendarController");
Routing::get('priceList', "PriceListController");
Routing::get('clients', "ClientController");
Routing::get('addClient', "ClientController");
Routing::get('addCar', "CarController");
Routing::get('register', "SecurityController");


Routing::post('login', "SecurityController");
Routing::post('addClientPost', "ClientController");
Routing::post('addCarPost', "CarController");
Routing::post('priceList', "PriceListController");
Routing::post('calendar', "CalendarController");
Routing::post('history', "HistoryController");
Routing::post('registerPost', "SecurityController");
Routing::post('search',"ClientController" );



Routing::run($path);



?>