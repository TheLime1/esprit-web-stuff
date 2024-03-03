<?php

class Employe
{
    private $lastname;
    private $firstname;
    private $email;
    private $dob;
    private $project_id;

    public function __construct($firstname, $lastname,  $email, $dob, $project_id)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->dob = $dob;
        $this->project_id = $project_id;
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

    public function getProjectId()
    {
        return $this->project_id;
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

    public function setProjectId($project_id)
    {
        $this->project_id = $project_id;
    }
}
