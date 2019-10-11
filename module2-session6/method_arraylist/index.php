<?php
include_once "MyList.php";

$myList = new MyList();

$myList->add(4,4);
$myList->add(3,3);
$myList->add(2,2);
$myList->add(1,1);
$myList->add(5,5);
$myList->remove(1);
var_dump($myList->myList);
echo "<br>";
print_r($myList);
echo "<br>";
echo $myList->size();



