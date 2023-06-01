<?php



class User
{
    private $email;

    private $password;

    private $name;

    private $surname;

    private $phone;
    private $address;
    private $role;


    public function __construct(string $email, string $password, string $name, string $surname, string $phone, string $address,string $role = ' ')
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->address=$address;
        $this->role=$role;
    }


    public function getRole(): string
    {
        return $this->role;
    }


    public function setRole(string $role): void
    {
        $this->role = $role;
    }



    public function getPhone()
    {
        return $this->phone;
    }



    public function setPhone( $phone): void
    {
        $this->phone = $phone;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress( $address)
    {
        $this->address = $address;
    }



    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }




}