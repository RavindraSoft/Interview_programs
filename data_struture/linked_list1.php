<?php

class Node {
    public $data;
    public $next;
    public function __construct($data){
        $this->date = $data;
        $this->next = null;
    }
}

class LinkedList {
    public $head;

    public function __construct(){
        $this->head = null;
    }

    public function insert($data){
        $newNode =  new Node($data);

        if($this->head == null){
            $this->head = $newNode;
        }else{
            $current = $this->head;
            while($current->next !== null){
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    public function display(){
        $current = $this->head;
        while($current != null){
            echo $current->date . ' ';
            $current = $current->next;
        }
    }
}



$list = new LinkedList();
$list->insert('nitesh');
$list->insert('yogesh');

$list->display();