<?php

namespace App\LinkedList;

class Node
{

    private $data;
    private $next;

    // Constructor
    public function __construct($data)
    {
        // echo "The class '" . __CLASS__ . "' was initiated!";
        $this->data = $data;
        $this->next = null;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function setNext($next)
    {
        $this->next = $next;
    }
}
