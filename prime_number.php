<?php

$n = 200;

$totalPrimeNumbers =0;
$arrPrime = [];

// for($i=2; $i<=$n; $i++){

//     $prime_number = true;
//     for($j=2; $j!=$i; $j++){
//         if($i%$j == 0){
//             $prime_number = false;
//             break;
//         }
//     }

//     if($prime_number == true){
//         $arrPrime[] = $i;
//         $totalPrimeNumbers++;
//     }
// }

for($i=2; $i<=$n; $i++){

    $primeNum = 1;
    for($j=2; $j<$i; $j++){
        if($i%$j == 0){
            $primeNum = 0;
        }
    }

    if($primeNum == 1){
        echo " $i is prime number <br>";
        $arrPrime[] = $i;
        $totalPrimeNumbers++;
    }
}



echo implode(", ",$arrPrime);

echo "<br><br> Total Prime Numbers - ". $totalPrimeNumbers;