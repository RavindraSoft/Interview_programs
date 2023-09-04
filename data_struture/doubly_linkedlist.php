<?php

class Node {
    public $data;
    public $next;
    public $prev;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
        $this->prev = null;
    }
}


class DoublyLinkedList {
    public $head;
    public $tail;

    public function __construct(){
        $this->head = null;
        $this->tail = null;
    }

    public function isEmpty(){
        return $this->head == null;
    }

    public function insert($data) {
        $newNode = new Node($data);
        if ($this->isEmpty()) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $newNode->prev = $this->tail;
            $this->tail->next = $newNode;
            $this->tail = $newNode;
        }
    }


    public function displayForward() {
        $current = $this->head;
        while ($current != null) {
            echo $current->data . ' ';
            $current = $current->next;
        }
        echo PHP_EOL;
    }


    public function displayBackward(){
        $current = $this->tail;
        while($current != null){
            echo $current->data. ' ';
            $current = $current->prev;
        }
        echo PHP_EOL;
    }
}


$dll = new DoublyLinkedList();
$dll->insert('nitesh');
$dll->insert('yogesh');
$dll->insert('Ravindra');

echo "Forward: ";
$dll->displayForward(); // Output: Forward: 1 2 3

echo "<br>";

echo "Backward: ";
$dll->displayBackward(); // Output: Backward: 3 2 1 