<?php
echo "hello world" . "<br>";
include_once('edible.php');
include_once('animal.php');
include_once('tiger.php');
include_once('chicken.php');
include_once('fruit.php');
include_once('orange.php');
include_once('apple.php');
$animals[0] = new Tiger();
$animals[1] = new Chicken();
foreach ($animals as $animal) {
    echo $animal->printSound() . " ";
    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . " ";
    }
    echo "<br>";
}
$fruit[0] = new Orange();
$fruit[1] = new Apple();
foreach ($fruit as $fruit) {
    echo $fruit->howToEat() . "<br>";
}