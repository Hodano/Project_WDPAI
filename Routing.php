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
        $key = "GET-".$url;
        self::$routes[$key] = $controller;
    }

    public static function post($url, $controller){
        $key = "POST-".$url;
        self::$routes[$key] = $controller;
    }

    public static function run($url){
        $httpMethod = $_SERVER["REQUEST_METHOD"];
        $action = explode("/", $url)[0];
        $controller = self::getRoute($action, $httpMethod);
        if(!$controller)
        {
            die("Wrong url or method!");
        }

        $object = new $controller;
        $action = $action ?:'index';

        $object->$action();
    }

    private static function getRoute($url, $httpMethod)
    {
        $key = $httpMethod."-".$url;
        if(!array_key_exists($key, self::$routes))
        {
            return null;
        }
        return self::$routes[$key];
    }
}

?>