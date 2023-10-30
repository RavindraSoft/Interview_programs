<?php

function generateBracketCombinations($n) {
    if ($n <= 0) {
        return [];
    }

    // $combinations = [];
    $combinations[] = ''; // Initialize with an empty string
    echo "for start ";

    for ($i = 0; $i < $n * 2; $i++) {
        $newCombinations = [];

        echo "<hr> Combinations $i - ";
        print_r($combinations);
        echo "end Cobinations $i ". count($combinations);


        foreach ($combinations as $combination) {

                echo "<br> here ". $i.' ';
                print_r($combination);
                
            $openCount = substr_count($combination, '[');
            $closeCount = substr_count($combination, ']');

            echo '   -- Open- '. $openCount.' close- '.$closeCount;

            if ($openCount < $n) {
                $newCombinations[] = $combination . '[';
            }

            if ($closeCount < $openCount) {
                $newCombinations[] = $combination . ']';
            }

            echo " new - ";
            print_r($newCombinations);
        }

        $combinations = $newCombinations;
    }

    return $combinations;
}

$n = 3; // Replace with the desired number of bracket pairs
$combinations = generateBracketCombinations($n);

echo "<hr>";
foreach ($combinations as $combination) {
    echo $combination . "<br>";
}
