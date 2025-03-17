<?php

function countWords($string) {
    $words = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);
    return count($words);
}

$string = "Привет, мир! Как дела?";
echo countWords($string); 
?>
