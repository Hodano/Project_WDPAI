<?php
require_once 'config.php';
class Database
{
    private  $username;
    private  $password;
    private  $host;
    private $database;
    private static $instance;


    private function __construct()
    {
        $this -> username = USERNAME;
        $this -> password = PASSWORD;
        $this -> host = HOST;
        $this -> database = DATABASE;
    }
    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
    public function connect(){
        try {
            $connection = new PDO("pgsql:host=$this->host;port=5432;dbname=$this->database",
                $this->username,
                $this->password,
                ["sslmode"  => "prefer"]
            );
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        }
        catch (PDOException $exception){
            die("Failed connect : ".$exception -> getMessage());
        }
    }


}