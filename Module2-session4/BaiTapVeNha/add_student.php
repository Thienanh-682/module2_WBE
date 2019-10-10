<?php
include_once "User.php";
include_once "Student.php";
include_once "StudentsManager.php";
if ($_SERVER['REQUEST_METHOD'] == "GET"){
    $names = $_GET['names'];
    $address =  $_GET['address'];
    $phone =  $_GET['phone'];
    $class =  $_GET['class'];
    $role =  $_GET['role'];
}
$student = new Student($names,$address,$phone,$class,$role);
$manager->addFile($student);
header('Location:display.php');