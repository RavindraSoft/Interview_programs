<?php 
function BracketCombinations($num) {

$memo = array_fill(0, $num + 1, 0);

echo "<pre>";
print_r($memo);

 // Base case: there is one valid combination with 0 pairs of parentheses
 $memo[0] = 1;

 // Use dynamic programming to calculate the combinations
 for ($i = 1; $i <= $num; $i++) {
     for ($j = 0; $j < $i; $j++) {
         $memo[$i] += $memo[$j] * $memo[$i - $j - 1];

         echo $i.' - '. $j;
         print_r($memo);
     }
 }

 return $memo[$num];
return $num;

}

// keep this function call here  
echo BracketCombinations(3);  