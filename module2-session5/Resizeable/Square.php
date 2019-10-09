<?php
include_once "Reziseable.php";

class Square extends Rectangle implements Reziseable
{
    public function __construct($width)
    {
        parent::__construct($width, $width);
    }

    public function resize()
    {
        parent::resize();
    }

    public function display()
    {
        return "square has : " . $this->width;
    }
}
