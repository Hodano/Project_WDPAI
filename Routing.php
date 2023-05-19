<?php
require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/ClientController.php';
require_once 'src/controllers/CarController.php';
require_once 'src/controllers/PriceListController.php';
require_once 'src/controllers/CalendarController.php';
require_once 'src/controllers/HistoryController.php';
class Routing{
    public static $routes;

    public static function get($url, $controller){
        self::$routes[$url] = $controller;
    }

    public static function post($url, $controller){
        self::$routes[$url] = $controller;
    }

    public static function run($url){
        $action = explode("/", $url)[0];

        if(!array_key_exists($action, self::$routes)){
            die("I think, this url is bad");
        }
        $controller = self::$routes[$action];
        $object = new $controller;
        $action = $action ?:'index';

        $object->$action();
    }
}

?>