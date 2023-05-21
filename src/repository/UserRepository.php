<?php

require_once "Repository.php";
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{
//    protected static $instance;
//
//    public static function getInstance(): UserRepository
//    {
//        if (!self::$instance) {
//            self::$instance = new UserRepository();
//                }
//
//        return self::$instance;
//    }
    public function getUser(string $email): ?User{ //nowy obiekt uzytkownika wypelnic danymi oraz zwrocic.
        $stmt = $this ->database->concect()->prepare('SELECT * FROM public.users JOIN public.user_detaills ON users.id_user_details = user_detaills.id WHERE users.email= :email ');
        $stmt->bindParam(':email',$email,PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if( $user ==false){
            throw new Exception("User not found in database");
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );
    }


}