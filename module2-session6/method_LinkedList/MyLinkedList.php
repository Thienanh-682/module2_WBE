<?php
include_once "Node.php";

class MyLinkedList
{
    public $fistNode;
    public $lastNode;
    public $numNodes;

    public function __construct()
    {
        $this->fistNode = NULL;
        $this->lastNode = NULL;
        $this->numNodes = 0;
    }

    function addFirst($data)
    {
        $node = new Node($data);
        $node->link = $this->fistNode;
        $this->fistNode = $node;
        if (!$this->lastNode) {
            $this->lastNode = $node;
        }
        $this->numNodes++;
    }

    function addLastNode($data)
    {
        if ($this->fistNode) {
            $node = new Node($data);
            $this->lastNode->link = $node;
            $node->link = NULL;
            $this->lastNode = $node;
            $this->numNodes++;
        } else {
            $this->addFirst($data);
        }
    }

    function size()
    {
        return $this->numNodes;
    }

    function add($index, $element)
    {
        if ($index <= 1) {
            $this->addFirst($element);
        } else if ($index >= $this->size()) {
            $this->addLastNode($element);
        } else {
            $node = new Node($element);
            $current = $this->fistNode;
        }

        if ($index > 0 && $index < $this->size()) {
            for ($i = 0; $i < $index; $i++) {
                $current = $current->link;
                $behind = $current->link;
            }
            $current->link = $node;
            $node->link = $behind;
        }
    }
}
function showList()
{
    $list = [];
    $current = $this->fistNode;
    while ($this->lastNode) {
        array_push($list, $current->getData());
        $current = $current->link;
    }
    return $list;
}
