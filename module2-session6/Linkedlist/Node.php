
<?php
class Node
{
    public $data;
    public $link;
    function __construct($data)
    {
        $this->data = $data;
        $this->link = null;
    }
    function readNode()
    {
        return $this->data;
    }
}