<?php
require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', "DefaultController");
Routing::get('history', "DefaultController");
Routing::get('calendar', "DefaultController");
Routing::get('priceList', "DefaultController");
Routing::get('clients', "DefaultController");


Routing::post('login', "SecurityController");
Routing::post('addClient', "ClientController");
Routing::post('addCar', "CarController");
Routing::post('priceList', "PriceListController");
Routing::post('calendar', "CalendarController");
Routing::post('history', "HistoryController");


Routing::run($path);


echo "Jestem plikiem startowym, będę tu podpinał wszystkie pdasdasliki";
?>