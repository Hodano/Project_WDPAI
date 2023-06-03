<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
class SecurityController extends AppController{
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this-> userRepository = UserRepository::getInstance();
    }

    public function login(){
        session_start();

//        $user = new User('mariusz@pk.edu.pl','Janek','Adam','Bialy');//niby User w bazie danych./ w orginale jest bez !

        if(!$this->isPost()){
            $this->render('login');
        }

        $email = $_POST["email"];
        $password = $_POST["password"];


        try {
            $user = $this-> userRepository->getUser($email);
        } catch (Exception $e){
            return $this->render('login', ['messages' => ['User no exist!']]);
        }


        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        $hashedPassword = md5($password);

        if ($user->getPassword() !== $hashedPassword) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }


        $_SESSION['user'] = $user;

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/clients");


    }

    public function registerPost()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];



        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }

        $hashedPassword = md5($password);
        $user = new User($email, $hashedPassword, $name, $surname,$phone,$address);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
    }
    public function register(){
        return $this->render('register');
    }
    public function logout()
    {
        session_start();
        setcookie(session_name(), '', 100);
        session_unset();
        session_destroy();
        $_SESSION = array();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/");
        exit();

    }

}