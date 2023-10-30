<?php

class class1 {
   public $name = "nitesh";
}


$obj = new class1();

$obj->name = "hitesh";

$obj2 = $obj;

$obj2->name = "ashwini";


echo $obj->name;