<?php

function eraseOverlapIntervals($intervals) {
    if (empty($intervals)) {
        return 0;
    }

    
    echo "<pre>";

    print_r($intervals);



    // Sort intervals by end points in ascending order
    usort($intervals, function($a, $b) {
        return $a[1] - $b[1];
    });

    echo "<pre>";

    print_r($intervals);

//    die;

    // Initialize variables
    $count = 0;  // Count of intervals to remove
    $end = $intervals[0][1];  // End point of the first interval

    // Iterate through the intervals
    for ($i = 1; $i < count($intervals); $i++) {
        if ($intervals[$i][0] < $end) {  // If the current interval overlaps with the last one
            $count++;  // Remove the current interval
        } else {
            $end = $intervals[$i][1];  // Update the end point
        }
    }

    return $count;
}

// Example usage:
$intervals = [[1, 3], [1, 2], [2, 3], [11, 20]];
echo eraseOverlapIntervals($intervals);  // Output: 1
