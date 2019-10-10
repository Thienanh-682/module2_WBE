<?php
include_once "Node.php";
class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;
    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }
    public function insertFirst($data)
    {
        $node = new Node($data);
        $node->link = $this->firstNode;
        $this->firstNode = $node;
        if ($this->lastNode == null) {
            $this->lastNode = $node;
        }
        $this->count++;
    }
    public function insertLast($data)
    {
        if ($this->firstNode != null) {
            $node = new Node($data);
            $this->lastNode->link = $node;
            $node->link = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }
    public function totalNodes()
    {
        return $this->count;
    }
    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != null) {
            array_push($listData, $current->readNode());
            $current = $current->link;
        }
        return $listData;
    }
}