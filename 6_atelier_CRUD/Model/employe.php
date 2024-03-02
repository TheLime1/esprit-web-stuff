<?php

class Employe
{
    private $lastname;
    private $firstname;
    private $email;
    private $dob;

    public function __construct($firstname, $lastname,  $email, $dob)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->dob = $dob;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }
}
