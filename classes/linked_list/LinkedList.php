<?php

namespace App\LinkedList;

class LinkedList
{

    private $head;

    // Constructor
    public function __construct()
    {
        // echo "The class '" . __CLASS__ . "' was initiated!";
        $this->head = null;
    }

    public function append($data): void
    {
        $this->push($data);
    }

    public function push($data): void
    {
        // @TODO:
    }

    public function prepend($data): void
    {
        $this->unshift($data);
    }

    public function unshift($data): void
    {
        $node = new Node($data);
        if ($this->head) {
            $node->setNext($this->head);
        }
        $this->head = $node;
    }

    public function insertAfter($data, $afterData): void
    {
        // @TODO:
    }

    public function insertBefore($data, $beforeData): void
    {
        // @TODO:
    }

    public function delete($data): bool
    {
        // @TODO: implement delete data

        return false;
    }

    public function deleteLast(): bool
    {
        return $this->pop();
    }

    public function pop(): bool
    {
        // @TODO: implement delete lasts

        return false;
    }

    public function deleteFirst(): bool
    {
        return $this->shift();
    }

    public function shift(): bool
    {
        // @TODO: implement delete first

        return false;
    }

    public function printNode(): void
    {
        if ($this->head) {
        }
    }
}
