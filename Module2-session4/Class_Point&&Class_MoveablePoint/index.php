<?php

include_once "Point.php";
include_once "MoveablePoint.php";
$point = new Point(1.234, 4.678);
echo $point->getXY();
echo "<br>";
echo $point->toString();
echo "<br>";
$movablePoint = new MoveablePoint(1.234, 4.678, 3.345, 7.456);
echo $movablePoint->getSpeed();
echo "<br>";
echo $movablePoint->toString();
echo "<br>";
echo $movablePoint->move();