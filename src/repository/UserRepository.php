<?php

require_once "Repository.php";
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{

    public function getUser(string $email): ?User{ //nowy obiekt uzytkownika wypelnic danymi oraz zwrocic.
        $stmt = $this ->database->connect()->prepare('SELECT * FROM public.users JOIN public.user_detaills ON users.id_user_details = user_detaills.id WHERE users.email= :email ');
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
            $user['surname'],
            $user['phone'],
            $user['address'],
        );
    }
    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO user_detaills (name, surname, phone, address)
            VALUES (?, ?, ?,?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getPhone(),
            $user->getAddress()
        ]);

        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (email, password, id_user_details,id_role)
            VALUES (?, ?, ?,?)
        ');

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
            $this->getUserDetailsId($user),
            1
        ]);
    }
    public function addAdmin(User $user)
    {

        $stmt = $this->database->connect()->prepare('
        INSERT INTO user_details (name, surname, phone, address)
        VALUES (?, ?, ?, ?)
    ');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getPhone(),
            $user->getAddress()
        ]);

        $stmt = $this->database->connect()->prepare('
        INSERT INTO users (email, password, id_user_details, id_role)
        VALUES (?, ?, ?, ?)
    ');

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
            $this->getUserDetailsId($user),
            2 // ID roli administratora
        ]);
    }









    public function getUserDetailsId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM user_detaills WHERE name = :name AND surname = :surname AND phone = :phone AND address = :address
        ');
        $name = $user->getName();
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);

        $surname = $user->getSurname();
        $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
        $phone = $user->getPhone();

        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $address = $user->getAddress();

        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id'];
    }


}