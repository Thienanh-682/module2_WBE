<?php
include_once 'LinkList.php';

$linkedList = new LinkList();

$linkedList->insertFirst(1);
$linkedList->insertFirst(2);
var_dump($linkedList);