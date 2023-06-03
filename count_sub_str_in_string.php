<?php

function countSubstring($string, $substring) {

    $stringLength = strlen($string);
    $substringLength = strlen($substring);
    $count = 0;
  
    // Iterate through the string
    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $j = 0;
        // Check for a match starting at the current position
        while ($j < $substringLength && $string[$i + $j] === $substring[$j]) {
            $j++;
        }
        // If the whole substring is found, increment the counter
        if ($j === $substringLength) {
            $count++;
        }
    }
  
    // Return the count of occurrences
    return $count;
}

// Usage example
$string = "aaahkjsflasaahkdfaajkjijeraa";
$substring = "aa";
$count = countSubstring($string, $substring);
echo "The substring '$substring' appeared $count times in the string.";

echo "<br><br>";
$str='ahgdahafaahgaaftyaavhffaagfyaahg';
$sub='ah';
$count = countSubstring($str, $sub);
echo "The substring '$sub' appeared $count times in the string.";
