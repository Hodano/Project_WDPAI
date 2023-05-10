<?php
require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', "DefaultController");
Routing::get('clients', "DefaultController");
Routing::get('history', "DefaultController");
Routing::get('calander', "DefaultController");
Routing::get('price_list', "DefaultController");
Routing::get('add_client', "DefaultController");
Routing::get('add_car', "DefaultController");

Routing::post('login', "SecurityController");


Routing::run($path);


echo "Jestem plikiem startowym, będę tu podpinał wszystkie pdasdasliki";
?>