<?php

$start = 1;
$end = 20;

  $primeCount = countPrimesInRange($start, $end);

  echo $primeCount;
  
  function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    if ($number <= 3) {
        return true;
    }

    if ($number % 2 === 0 || $number % 3 === 0) {
        return false;
    }

    $sqrt = sqrt($number);
    for ($i = 5; $i <= $sqrt; $i += 6) {
        if ($number % $i === 0 || $number % ($i + 2) === 0) {
            return false;
        }
    }

    return true;
}

function countPrimesInRange($start, $end) {
    $count = 0;

    if($start == 1){
        $start=2;
    }
    // Iterate through odd numbers in the given range
    for ($num = $start; $num <= $end; $num++) {
        if (isPrime($num)) {

            echo $num.'-'.$count.' ';
            echo "<br>";

            $count++;
        }
    }

    return $count;
}
