<?php

function isPalindrome($string) {

    $processedString = strtolower(str_replace(' ', '', $string));
    
    return $processedString === strrev($processedString);
}

echo isPalindrome("Madam") ? "Палиндром" : "Не палиндром"; 
echo isPalindrome("Hello") ? "Палиндром" : "Не палиндром";
?>