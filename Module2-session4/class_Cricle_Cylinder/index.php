<?php
include_once("cricle.php");
include_once("cylinder.php");

$cricle = new Circle(3);
echo "Cricle area: " . $cricle->calculateArea() . "<br>";
echo "Cricle Perimeter: " . $cricle->calculatePerimeter() . "<br>". "<hr>";

$cylinder = new Cylinder(3, 2);
echo "Cylinder area: " . $cylinder->calculateArea() . "<br>";
echo "Cylinder perimeter: " . $cylinder->calculatePerimeter();