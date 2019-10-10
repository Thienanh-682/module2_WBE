<?php
$id = $_GET['id'];
include_once "StudentsManager.php";
$listStudent = $manager->readFileJsonToArray();
array_splice($listStudent, $id, 1);
$manager->saveDataToJson($listStudent);
header('Location:display.php');
