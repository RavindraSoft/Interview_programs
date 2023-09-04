<?php 

$data = ['name' => 'John', 'age' => 30];
$serializedData = serialize($data);

file_put_contents('data.txt', $serializedData);


$serializedData = file_get_contents('data.txt');
$data = unserialize($serializedData);


print_r($data);
