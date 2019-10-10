<?php
include_once "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
$listInteger->add(4);

echo $listInteger->get(1);
echo "<br>";
echo $listInteger->get(-1);
