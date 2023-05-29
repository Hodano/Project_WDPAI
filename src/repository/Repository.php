<?php

require_once __DIR__.'/../../Database.php';
class Repository
{
    protected $database;
    private static $instance;

    protected function __construct()             //zrobiłem singletona
    {
        $this->database = new Database();
    }


    public static function getInstance(): self
    {
//        if (!self::$instance) {
            self::$instance = new static();
//        }

        return self::$instance;
    }




}