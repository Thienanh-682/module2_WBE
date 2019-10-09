<?php
include_once "Reziseable.php";

class Rectangle implements Reziseable
{
    public $width;
    public $height;

    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function resize()
    {
        $this->width *= rand(1,100);
        $this->height *= rand(1,100);
    }

    public function display()
    {
        return "Width = " .$this->width . " , " . "Height = " . $this->height;
    }
}
