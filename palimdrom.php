<?php
// check palimndrom text


$str = (string) 5123215;


var_dump(palim($str));

function palim($str){
    $strlen = stringlen($str);
    for($i=0,$j=$strlen-1; $i!=$j; $i++, $j--){
        if($str[$i] != $str[$j]){
            return false;
        }
    }
    return true;
}

function stringlen($str){
    $count =0;
    for($i=0; isset($str[$i]); $i++){
        $count++;
    }
    return $count;
}
