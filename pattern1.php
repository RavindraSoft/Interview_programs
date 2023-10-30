<?php

//     A
//    BCB
//   CDCDC
//  EDEDEDE
// FDFDFDFDF



$size = 5;
$startingChar = ord('A');
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat('-', $size - $i);
    for ($j = 0; $j < $i; $j++) {
        echo chr($startingChar + $i - 1);
    }
    for ($j = $i - 2; $j >= 0; $j--) {
        echo chr($startingChar + $i - 1);
    }
    echo "<br>";
}



echo "<hr>";

//     *
//    ***
//   *****
//  *******
// *********

$size = 5;


for($i=1; $i<=$size; $i++){
    $n = $size-$i;
    for($j=1; $j<=$n; $j++){
        echo "&nbsp;&nbsp;";
    }
    $m= 2*$i-1;
    for($k=1;$k<=$m; $k++){
        echo '*';
    }
    echo "<br>";
}


echo "<hr>";


$n = 5;
$char = ord('A');

for($i=1; $i<=$n; $i++){

    echo str_repeat("&nbsp;&nbsp;",$n-$i);
    for($j=0; $j<$i; $j++){
        echo chr($char+$j);  
    }
    for($j=$i-2; $j>=0; $j--){
        echo chr($char+$j);
    }
    echo "<br>";
}





echo "<hr>";
//     1
//    232
//   34543
//  4567654
// 567898765


$size = 5;
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat("&nbsp;&nbsp;", $size - $i);
    for ($j = $i; $j < $i * 2 - 1; $j++) {
        echo $j;
    }
    for ($j = $i * 2 - 1; $j >= $i; $j--) {
        echo $j;
    }
    echo "<br>";
}


echo "<hr>";
// 12345
//  1234
//   123
//    12
//     1

$n=5;
for($i=1; $i<=$n; $i++){
    for($j=1,$p=1; $j<=$n; $j++){
        if($i > $j){
            echo "-";
        }else{
            echo $p++;
        }
    }
    echo "<br>";
}

echo "<hr>";


// *   *
//  * *
//   *
//  * *
// *   *


$n = 5;

for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$n; $j++){

        if($i==$j || $j == ($n-$i+1)){
            echo '*';
        }else{
            echo "&nbsp;&nbsp;";
        }

    }
    echo "<br>";
}



 echo "<hr>";
//     *
//    **
//   ***
//  ****
// *****

$n = 5;
for($i=1; $i<= $n; $i++){
    for($j=$n; $j>= 1; $j--){
        if($j > $i){
            echo '&nbsp;&nbsp;';
        }else{
            echo '*';
        }
    }
    echo "<br>";
}
echo "<hr>";
for($i=1; $i<=$n; $i++){
    echo str_repeat('&nbsp;&nbsp;', $n-$i);
    echo str_repeat('*', $i);
    echo "<br>";
}




echo "<hr>";
// 54321
// 5432
// 543
// 54
// 5

$n=5;
for ($i=1; $i<=$n; $i++) {
    for ($j=$n; $j>=$i; $j--) {
        echo $j;
    }
    echo "<br>";
}  

echo "<hr>";
// 1
// 22
// 333
// 4444
// 55555

$n = 5;
for($i=1; $i<= $n; $i++){
    for($j=1; $j<= $i; $j++){
        echo $i;
    }
    echo "<br>";
}

echo "<hr>";

/*

*****
****
***
**
*

*/


$size = 5;

for($i=1; $i<= $size; $i++){
    for($j=1; $j<= $size-$i+1; $j++){
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";

// *
// **
// ***
// ****
// *****

$size = 5;

for($i=1; $i<= $size; $i++){
    for($j=1; $j<= $i; $j++){
        echo '*';
    }
    echo "<br>";
}