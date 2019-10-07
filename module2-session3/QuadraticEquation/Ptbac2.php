<?php
include "QuadraticEquation.php";

$a = 4;
$b = -3;
$c = -1;
$quadraticequation = new QuadraticEquation($a, $b, $c);
if ($quadraticequation->get_Discriminant() > 0) {
    echo "X1 = " . $quadraticequation->get_Root1() . "<br>" . "X2 = " . $quadraticequation->get_Root2();
} elseif ($quadraticequation->get_Discriminant() == 0) {
    echo "X1 = X2 = " . $quadraticequation->get_coupleRoot();
} else {
    echo "Vô Nghiệm";
}
?>