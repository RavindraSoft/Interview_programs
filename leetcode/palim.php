<?php 

    function isPalindrome($x) {

        $num = $x;
        $revnum = 0;
        $d = '0';
        while($x > 0){
            $d = $x % 10;
            $revnum = $revnum *10 + $d;
            $x =(int)($x/10);
        }        



        if($revnum == $num){
            return 'true';
        }else{
            return 'false';
        }
    }


    echo isPalindrome(11211);