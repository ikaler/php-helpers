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

    /**
     * This function is clone of $this->push($data)
     * 
     * @param $data
     */
    public function append($data): void
    {
        $this->push($data);
    }

    /**
     * Push/Append data at the end of the linked list
     * 
     * @param $data
     */
    public function push($data): void
    {
        $node = new Node();
        $node->setData($data);

        if ($this->head) {
            $currentNode = $this->head;
            while ($currentNode->getNext() != null) {
                $currentNode = $currentNode->getNext();
            }
            $currentNode->setNext($node);
        } else {
            $this->head = $node;
        }
    }

    /**
     * This function is clone of $this->unshift($data)
     * 
     * @param $data
     */
    public function prepend($data): void
    {
        $this->unshift($data);
    }

    /**
     * Prepend data at the beginning of the linked list
     * 
     * @param $data
     */
    public function unshift($data): void
    {
        $node = new Node();
        $node->setData($data);

        if ($this->head) {
            $node->setNext($this->head);
        }
        $this->head = $node;
    }

    /**
     * Insert node after a given node
     * 
     * @param $data
     * @param $lookupData
     * 
     * @return bool
     */
    public function insertAfter($data, $lookupData): bool
    {
        if ($this->head) {
            $currentNode = $this->head;
            while ($currentNode->getNext() != null && $currentNode->getData() != $lookupData) {
                $currentNode = $currentNode->getNext();
            }

            if ($currentNode->getData() == $lookupData) {
                $node = new Node();
                $node->setData($data);
                
                $node->setNext($currentNode->getNext());
                $currentNode->setNext($node);

                return true;
            }
        }
        return false;
    }

    /**
     * Insert node before a given node
     * 
     * @param $data
     * @param $lookupData
     * 
     * @return bool
     */
    public function insertBefore($data, $lookupData): bool
    {
        if ($this->head) {
            $prevNode = null;
            $currentNode = $this->head;
            while ($currentNode->getNext() != null && $currentNode->getData() != $lookupData) {
                $prevNode = $currentNode;
                $currentNode = $currentNode->getNext(); 
            }

            if ($currentNode->getData() == $lookupData) {
                $node = new Node();
                $node->setData($data);
                $node->setNext($currentNode);

                if ($prevNode) {
                    $prevNode->setNext($node);
                } else {
                    $this->head = $node;
                }
                return true;
            }
        } 
        return false;
    }

    /**
     * Delete a given node
     * 
     * @param $data
     * 
     * @return bool
     */
    public function delete($data): bool
    {
        if ($this->head) {
            $prevNode = null;
            $currentNode = $this->head;
            while ($currentNode->getNext() != null && $currentNode->getData() != $data) {
                $prevNode = $currentNode;
                $currentNode = $currentNode->getNext(); 
            }

            if ($currentNode->getData() == $data) {
                if ($prevNode) {
                    $prevNode->setNext($currentNode->getNext());
                } else {
                    $this->head = $currentNode->getNext();
                }
                unset($currentNode);
                return true;
            }
        }
        return false;
    }

    /**
     * This is a clone for $this->shift()
     * 
     * @return bool
     */
    public function deleteFirst(): bool
    {
        return $this->shift();
    }

    /**
     * Delete first node
     * 
     * @return bool
     */
    public function shift(): bool
    {
        if ($this->head) {
            $currentNode = $this->head;
            $this->head = $currentNode->getNext();
            unset($currentNode);
            return true;
        }
        return false;
    }

    /**
     * This is clone of $this->pop()
     * 
     * @return bool
     */
    public function deleteLast(): bool
    {
        return $this->pop();
    }

    /**
     * Delete last node
     * 
     * @return bool
     */
    public function pop(): bool
    {
        if ($this->head) {
            $prevNode = null;
            $currentNode = $this->head;
            while ($currentNode->getNext() != null) {
                $prevNode = $currentNode;
                $currentNode = $currentNode->getNext(); 
            }

            if ($prevNode) {
                $prevNode->setNext(null);
            } else {
                $this->head = null;
            }
            unset($currentNode);
            return true;
        }
        return false;
    }

    /**
     * Print the linked list
     * 
     * @param $lineBreak
     */
    public function printList($lineBreak="\n"): void
    {
        // echo "Printing linked list..." . $lineBreak;
        if ($this->head) {
            $currentNode = $this->head;
            $i = 0;
            while($currentNode != null) {
                echo "Node: " . $i . " -> Data: " . $currentNode->getData() . $lineBreak;
                $currentNode = $currentNode->getNext();
                $i++;
            }
        }
    }
}
