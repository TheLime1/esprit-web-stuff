<?php
include_once '../Model/employe.php';
include_once '../Controller/EmployeC.php';
session_start();

if (isset($_SESSION['employe'])) {
    $employe = unserialize($_SESSION['employe']);
    $employeC = new EmployeC();
    $employeC->show($employe);
} else {
    echo "No employee data found.";
}
