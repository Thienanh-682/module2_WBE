<?php

class Circle
{
    protected $radius;
    protected $names;

    public function __construct($names,$radius)
    {
        $this->radius = $radius;
        $this->names = $names;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getNames()
    {
        return $this->names;
    }

    public function setNames($names)
    {
        $this->names = $names;
    }

}