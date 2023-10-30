<?php

function isValidRoman($roman) {
    // Define the valid Roman numerals and their corresponding values
    $romanNumerals = array(
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    );
    
    $prevValue = PHP_INT_MAX; // Initialize prevValue to a very large value

    for ($i = strlen($roman) - 1; $i >= 0; $i--) {
        $currentValue = $romanNumerals[$roman[$i]];
        
        if ($currentValue === null) {
            return false; // Invalid character
        }

        if ($currentValue >= $prevValue) {
            // Current value is greater than or equal to the previous value
            $prevValue = $currentValue;
        } else {
            // Current value is smaller than the previous value
            // Check for valid subtractive notation (e.g., IV for 4, IX for 9)
            $validSubtractive = false;
            foreach ($romanNumerals as $subtractiveRoman => $subtractiveValue) {
                if ($i >= 1 && $roman[$i - 1] == $subtractiveRoman) {
                    if ($currentValue / $subtractiveValue == 10 || $currentValue / $subtractiveValue == 5) {
                        $validSubtractive = true;
                        $prevValue = $subtractiveValue;
                        $i--; // Move back one position to skip the subtractiveRoman
                        break;
                    }
                }
            }
            
            if (!$validSubtractive) {
                return false; // Invalid subtractive notation
            }
        }
    }
    
    return true; // The input string is a valid Roman numeral
}

// Example usage:  
$romanNumeral = "VI";
if (isValidRoman($romanNumeral)) {
    echo "$romanNumeral is a valid Roman numeral.";
} else {
    echo "$romanNumeral is not a valid Roman numeral.";
}
