<?php
// 3. Find the Factorial
function factor($num){
    $fac=1;
    for($i=$num ; $i>=1 ;$i--){
        $fac*=$i;
    }
    return $fac;
}
echo factor(5);