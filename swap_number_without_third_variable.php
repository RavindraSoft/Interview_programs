<?php
$a = 5;
$b = 7;

echo "Before Code -> ". $a." == ". $b;

$b =$a+$b;
$a= $b-$a;
$b= $b-$a;

echo "<br><br>";
echo "After Code Result -> ". $a." == ". $b;
