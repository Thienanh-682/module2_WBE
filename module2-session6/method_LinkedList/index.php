<?php
include_once "MyLinkedList.php";

$myList = new MyLinkedList();
$myList->addFirst(1);

$myList->addLastNode(2);
$myList->addLastNode(3);
$myList->addLastNode(4);
$myList->addLastNode(5);

$myList->add(0,11);
$myList->add(10,66);

print_r($myList);