<?php


class QuadraticEquation
{
    public $a;
    public $b;
    public $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function get_A()
    {
        return $this->a;
    }

    function set_A($value_a)
    {
        $this->a = $value_a;
    }

    function get_B()
    {
        return $this->b;
    }

    function set_B($value_b)
    {
        $this->b = $value_b;
    }

    function get_C()
    {
        return $this->c;
    }

    function set_C($value_c)
    {
        $this->c = $value_c;
    }

    function get_Discriminant()
    {
        return ($this->b * $this->b - 4 * $this->a * $this->c);
    }

    function get_Root1()
    {
        return (-$this->b + sqrt($this->b * $this->b - 4 * $this->a * $this->c)) / 2;
    }

    function get_Root2()
    {
        return (-$this->b - sqrt($this->b * $this->b - 4 * $this->a * $this->c)) / 2;
    }

    function get_coupleRoot()
    {
        return (-$this->b) / (2 * $this->a);
    }
}
