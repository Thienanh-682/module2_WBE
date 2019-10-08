<?php
class Fan
{
    const low = 1;
    const medium = 2;
    const fast = 3;
    private $speed;
    private $on;
    private $radius;
    private $color;
    function __construct($speed = self::low, $on = false, $radius = 5, $color = "blue")
    {
        $this->speed = $speed;
        $this->on = $on;
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getSpeed()
    {
        return $this->speed;
    }
    public function setSpeed($value)
    {
        $this->speed = $value;
    }
    public function getOn()
    {
        return $this->on;
    }
    public function setOn($value)
    {
        $this->on = $value;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function setRadius($value)
    {
        $this->radius = $value;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($value)
    {
        $this->color = $value;
    }
    public function toString()
    {
        if ($this->getOn()) {
            return "Fan speed: ".$this->getSpeed() . ", Fan color: ".$this->getColor() .", Fan radius: ". $this->getRadius() . " and fan is on";
        } else {
            return "Fan speed: ".$this->getSpeed() . ", Fan color: ".$this->getColor() .", Fan radius: ". $this->getRadius() . " and fan is off";
        }
    }
}
$fanToshiba = new Fan();
echo ($fanToshiba->toString());
