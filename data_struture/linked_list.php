<?php

class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }   




    
}

class LinkedList {
    public $head;

    public function __construct() {
        $this->head = null;
    }

    public function insert($data) {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    public function display() {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . ' ';
            $current = $current->next;
        }
    }
}

$list = new LinkedList();
$list->insert(1);
$list->insert(2);
$list->insert(3);
$list->display(); // Output: 1 2 3
