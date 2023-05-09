<?php
require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', "DefoultController");
Routing::get('clients', "DefoultController");
Routing::get('history', "DefoultController");
Routing::get('calander', "DefoultController");
Routing::get('price_list', "DefoultController");
Routing::get('add_client', "DefoultController");
Routing::get('add_car', "DefoultController");

Routing::run($path);


echo "Jestem plikiem startowym, będę tu podpinał wszystkie pdasdasliki";
?>