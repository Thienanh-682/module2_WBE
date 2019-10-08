<?php
include_once "point2D.php";

class Point3D extends Point2D
{
    private $z;

    public function __construct($x, $y, $z)
    {
        $this->z = $z;
        parent::__construct($x, $y);
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($value)
    {
        $this->z = $value;
    }

    public function setXYZ($x, $y, $z)
    {
        parent::setX($x);
        parent::setY($y);
        $this->z = $z;
    }

    public function getXYZ()
    {
        return [parent::getX(), parent::getY(), $this->z];
    }

    public function showPosition()
    {
        echo "(" . parent::getY() . "," . parent::getX() . "," . $this->z . ")";
    }
}