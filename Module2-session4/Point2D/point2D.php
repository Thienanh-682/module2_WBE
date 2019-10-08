<?php

class Point2D
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX($value)
    {
        $this->x = $value;
    }

    public function setY($value)
    {
        $this->y = $value;
    }

    public function getXY()
    {
        return [$this->x, $this->y];
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function toString()
    {
        echo "(" . $this->getX() . "," . $this->getY() . ")";
    }
}