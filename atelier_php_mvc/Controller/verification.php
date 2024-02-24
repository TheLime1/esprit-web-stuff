<?php
include_once '../Model/employe.php';
include_once 'EmployeC.php';
session_start();

class Verification
{
    public function handleRequest()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
            $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
            $email = isset($_POST["email"]) ? $_POST["email"] : "";
            $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
            $password = isset($_POST["pass1"]) ? $_POST["pass1"] : "";
            $dob = isset($_POST["dob"]) ? $_POST["dob"] : "";
            $pass2 = isset($_POST["pass2"]) ? $_POST["pass2"] : "";

            if ($password !== $pass2) {
                header('Location: ../View/error.php?message=Passwords do not match');
                exit();
            }

            $employe1 = new Employe($firstname, $lastname, $email, $phone, $password, $dob);
            $_SESSION['employe'] = serialize($employe1);
            header('Location: ../View/showEmploye.php');
            exit();
        }
    }
}

$verification = new Verification();
$verification->handleRequest();
