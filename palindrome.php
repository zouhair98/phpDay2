<?php
// 4. Palindrome Checker
function checkPalindrome($name){
    $reversed =strrev($name);
    $len=strlen($name);
    for($i=0 ; $i<$len ; $i++){
        if($name[$i] !== $reversed[$i]){
            return false;
        }else return true;
    }
}
echo checkPalindrome("radar");
