<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
class SecurityController extends AppController{

    public function login(){

//        $user = new User('mariusz@pk.edu.pl','Janek','Adam','Bialy');//niby User w bazie danych./ w orginale jest bez !
        $userRepository = UserRepository::getInstance();

        if(!$this->isPost()){
            $this->render('login');
        }

        $email = $_POST["email"];
        $password = $_POST["password"];


        try {
            $user = $userRepository->getUser($email);
        } catch (Exception $e){
            return $this->render('login', ['messages' => ['User no exist!']]);
        }
        

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/clients");


    }
}