<?php
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

function countParenthesesCombinations($n) {
    $numerator = factorial(2 * $n);
    $denominator = factorial($n) * factorial($n + 1);
    return $numerator / $denominator;
}

$n = 6;
$combinations = countParenthesesCombinations($n);

echo "Number of combinations: " . $combinations;
?>
