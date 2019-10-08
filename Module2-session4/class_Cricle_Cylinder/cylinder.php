<?php
include_once('cricle.php');

class Cylinder extends Circle
{
    private $height;

    public function __construct($radius, $height)
    {
        $this->height = $height;
        parent::__construct($radius);
    }

    public function calculatePerimeter()
    {
        return parent::calculatePerimeter() * $this->height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }
}