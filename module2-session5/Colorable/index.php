<?php
include_once "Colorable.php";
include_once "Squares.php";

$squares = new Squares(4,4,"Red");
echo $squares->howToColor();