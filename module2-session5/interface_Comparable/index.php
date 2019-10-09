<?php
include "Comparable.php";
include "Circle.php";
include "ComparableCircle.php";

$circleOne = new ComparableCircle('circle',8);
$circleTwo = new ComparableCircle('circle',8);

var_dump($circleOne->compareTo($circleTwo));