<?php 

function minCratesNeeded($items, $largeCount, $smallCount) {

    $largeCapacity = 5;
    $smallCapacity = 1;


    // Check if it's possible to meet the requirements
    if ($items > ($largeCapacity * $largeCount + $smallCapacity * $smallCount)) {
        return -1;
    }

    // Initialize variables to keep track of the total crates used and items remaining
    $totalCrates = 0;
    $itemsRemaining = $items;

    // Use large crates first if possible
    while ($itemsRemaining >= $largeCapacity && $largeCount > 0) {
        $totalCrates++;
        $itemsRemaining -= $largeCapacity;
        $largeCount--;
    }

    // Use small crates to fill in the remaining items
    while ($itemsRemaining > 0 && $smallCount > 0) {
        $totalCrates++;
        $itemsRemaining -= $smallCapacity;
        $smallCount--;
    }

    return $totalCrates;
}

// Example usage:
$items = 16;


$largeCount = 2;
$smallCount = 10;
$result = minCratesNeeded($items, $largeCount, $smallCount);
echo $result; // Output should be 8
