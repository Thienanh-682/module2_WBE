<?php
include_once("point2D.php");
include_once("point3D.php");

$point2D = new Point2D(3, 5);
echo $point2D->toString() . "<br>";
$point3D = new Point3D(4, 2, 5);
echo $point3D->showPosition();