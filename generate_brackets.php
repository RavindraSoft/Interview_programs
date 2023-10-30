<?php 

function generateParentheses($n) {
    $result = [];
    generateParenthesisRecursive($n, $n, '', $result);
    return $result;
}

function generateParenthesisRecursive($left, $right, $current, &$result) {
    if ($left == 0 && $right == 0) {
        // If both left and right counts are zero, we have a valid combination.
        $result[] = $current;
        return;
    }

    // Add an open parenthesis if we have some left.
    if ($left > 0) {
        generateParenthesisRecursive($left - 1, $right, $current . '(', $result);
    }

    // Add a close parenthesis if we have more open parentheses than close parentheses.
    if ($right > $left) {
        generateParenthesisRecursive($left, $right - 1, $current . ')', $result);
    }
}

// Example usage:
$n = 4;
$combinations = generateParentheses($n);
foreach ($combinations as $combination) {
    echo "$combination <br>";
}
