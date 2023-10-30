<?php 

$str = 'letter(s) gal(o)(r)((e)';


echo areBracketsValid($str);
  



function areBracketsValid($str) {
    $stack = []; 
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if ($char == '(') {
            array_push($stack, $char);
        } elseif ($char == ')') {
            if (empty($stack)) {
                return false;
            } else {  
                array_pop($stack);
            }
        }
    }


     if(empty($stack)){
        return 1;
     }else{
        return 0;
     }
}



   


?>