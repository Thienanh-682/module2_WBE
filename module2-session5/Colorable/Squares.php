<?php

class Squares implements Colorable
{

    protected $width;
    protected $height;
    protected $color;

    public function __construct($width, $height, $color)
    {
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function howToColor()
    {
        return "color shape is: $this->color";
    }
}