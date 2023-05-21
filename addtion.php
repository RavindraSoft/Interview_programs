<?php 


$num2 = '1111111111111111111111';
$num1 = '99999999999999999999999999999';
echo "input number1 - $num1 -". strlen($num1);   echo "<br>";
echo "input number1 - $num2 -". strlen($num2);   echo "<br>";

$expected = '100000001111111111111111111110';
echo "Expected Output - $expected"; echo " - ".strlen($expected);   echo "<br>";

$result = add($num1, $num2);
echo "<br><br>";
echo "Result - ". $result; echo " - ".strlen($result);
if($result == $expected){
    echo "<h1 style='color:green;'>program generated output is correct </h1>";
}else{
    echo "<br><br>";
    echo "<h1 style='color:red'>Wrong output</h1>";
}

// echo add('123445454004857575940940', '87657989028374646479393028374');
// Output - "87658112473828651336968969314"

$a = '123445454004857575940940';
$b = '87657989028374646479393028374';
$c = '87658112473828651336968969314';
echo "input number1 - $a -". strlen($a);   echo "<br>";
echo "input number1 - $b -". strlen($b);   echo "<br>";
echo "Expected Output - $c"; echo " - ".strlen($c);   echo "<br>";

$newC = add($a,$b);
echo "<br>";
echo "Result - ". $newC; echo " - ".strlen($newC);

if($c == $newC){
    echo "<h1 style='color:green;'>program generated output is correct </h1>";
}else{
    echo "<br><br>";
    echo "<h1 style='color:red'>Wrong output</h1>";
}


function add($number1, $number2){

    $resultSum = '';
    $numLen1 = strlen($number1);
    $numLen2 = strlen($number2);

    // echo "len num1 - ". $numLen1; echo "<br>";
    // echo "len num2 - ". $numLen2;

    if($numLen1 < $numLen2){
        $number1 = addzero($number1, $numLen2-$numLen1);
    }else{
        $number2 = addzero($number2, $numLen1-$numLen2);
    }
    
    $numlen = strlen($number1);
    $carry = 0;

    for($i=$numlen-1; $i>=0; $i--){
        $sum = $number1[$i] + $number2[$i] + $carry;
        $carry = (int)($sum/10);
        $rem = $sum % 10;
        $resultSum = $rem.$resultSum;
    }
    if($carry>0)    $resultSum = $carry.$resultSum;
    
    return $resultSum;
}

function addzero($num, $diff){
    for ($i=$diff;$i>0; $i--) { 
        $num = '0'.$num;
    }
    return $num;
}