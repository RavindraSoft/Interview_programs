<?php 

function findFirstOccurrence($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;
    $firstOccurrence = -1;

    while ($left <= $right) {
        $mid = $left + intdiv(($right - $left), 2);

        if ($arr[$mid] == $target) {
            $firstOccurrence = $mid;
            $right = $mid - 1; // Continue searching in the left half
        } elseif ($arr[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return $firstOccurrence;
}

function findLastOccurrence($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;
    $lastOccurrence = -1;

    while ($left <= $right) {
        $mid = $left + intdiv(($right - $left), 2);

        if ($arr[$mid] == $target) {
            $lastOccurrence = $mid;
            $left = $mid + 1; // Continue searching in the right half
        } elseif ($arr[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return $lastOccurrence;
}

// Example usage:
$arr = [1, 2, 2, 2, 3, 4, 4, 5, 6];
$target = 4;

$firstIndex = findFirstOccurrence($arr, $target);
$lastIndex = findLastOccurrence($arr, $target);

if ($firstIndex != -1 && $lastIndex != -1) {
    echo "First occurrence of $target is at index $firstIndex\n";
    echo "Last occurrence of $target is at index $lastIndex\n";
} else {
    echo "Number $target not found in the array.\n";
}
