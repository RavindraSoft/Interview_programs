<?php

class stack {
    private $item = [];

    public function push($data){
        array_push($this->item, $data);
    }

    public function pop(){
        if(!$this->isEmpty()){
            return array_pop($this->item);
        }
        return 'stack empy';
    }

    public function isEmpty(){
        return empty($this->item);
    }
}

$stack = new stack;

$stack->push('nitesh');
$stack->push('nitesh1');
$stack->push('nitesh2');

echo $stack->pop();
echo "<br>";
echo $stack->pop();
echo "<br>";
echo $stack->pop();
echo "<br>";
echo $stack->pop();
echo "<br>";
echo $stack->pop();

$stack->push('yogesh');
$stack->push('mahesh');
echo "<br>";
echo $stack->pop();

echo "<br>";
echo $stack->pop();