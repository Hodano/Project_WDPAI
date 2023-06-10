<?php

require_once __DIR__.'/../../Database.php';
class Repository
{
    protected $database;


    public function __construct()             //zrobiłem singletona
    {
        $this->database = Database::getInstance();
    }





}