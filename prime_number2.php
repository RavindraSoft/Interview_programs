<?php
function isPrime($number) {

    for($i=2; $i< $number; $i++){
        if ($number % $i == 0 || $number % ($i + 2) == 0) 
            return false;  
    }

    return true;
}

// Test the function with some numbers
$number = 17;

for($i=2; $i<= 200; $i++){
    if (isPrime($i)) {
        $primeNumbers[] = $i;
    } else {
        $notPrimeNumbers[] = $i;
    }
}

echo implode(', ',$primeNumbers);

echo "<hr>";

echo "total - ". count($primeNumbers);





?>
