<?php

class Queue {

    private $item = [];

    public function enqueue($data){
        array_push($this->item, $data);
    }

    public function dequeue(){
        if(!$this->isEmpty()){
            return array_shift($this->item);
        }
        return 'Empty Queue';
    }

    public function isEmpty(){
        return empty($this->item);
    }
}

$queue = new Queue;

$queue->enqueue('nitesh');
$queue->enqueue('yogesh');
echo $queue->dequeue();
echo "<br>";
echo $queue->dequeue();
echo "<br>";
echo $queue->dequeue();
echo "<br>";
echo $queue->dequeue();

$queue->enqueue('india');
echo "<br>";
echo $queue->dequeue();
echo "<br>";
echo $queue->dequeue();