<?php

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($names, $radius)
    {
        parent::__construct($names, $radius);
    }

    public function compareTo($circlrOther)
    {
        $circlrOtherRadius = $circlrOther->getRadius();

        if ($this->getRadius() > $circlrOtherRadius) {
            return 1;
        } else if ($this->getRadius() < $circlrOtherRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}
