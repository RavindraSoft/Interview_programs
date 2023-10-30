<?php
/*
Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

An input string is valid if:

Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.
Every close bracket has a corresponding open bracket of the same type.
*/

echo isValid("{[]}");

function isValid($s) {

    $sl = strlen($s);

    $arr = ['('=> ')', '['=>']','{'=>'}'];

    for($i=0; $i<$sl; $i+=2){        
        if ($arr[$s[$i]] !== $s[$i+1]){
            return 'false';
        }
    }

    return 'true';
    
}