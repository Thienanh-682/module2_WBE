<?php

class MyList
{
    public $myList;

    function Mylist($myList = "")
    {
        if (is_array($myList)) {
            $this->myList = $myList;
        } else {
            $this->myList = array();
        }
    }

    function add($index, $element)
    {
        return $this->myList[$index] = $element;
    }

    function size()
    {
        return count($this->myList);
    }

    function remove($index)
    {
        return array_splice($this->myList, $index, 1);
    }
}