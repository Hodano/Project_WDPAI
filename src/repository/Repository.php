<?php

require_once __DIR__.'/../../Database.php';
class Repository
{
    protected $database;

    protected function __construct()             //zrobiłem singletona
    {
        $this->database = new Database();
    }




}