<?php
$a = 5;
$b = 7;

echo $a." == ". $b;

$b =$a+$b;
$a= $b-$a;
$b= $b-$a;

echo "<br><br>";
echo $a." == ". $b;