<?php
//  2. Check if a Number is Prime
function primeNumber($num){

    if($num <=1){
        return false;
    }else{
    for($i=$num-1 ; $i>1 ; $i--){
        if($num % $i == 0){
            return false;
        }else {return true;}
    }
    }
}

echo primeNumber(7);