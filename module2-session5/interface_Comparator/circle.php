<?php
class Circle
{
    protected $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    function setRadius($radius)
    {
        $this->radius = $radius;
    }

    function getRadius()
    {
        return $this->radius;
    }
}