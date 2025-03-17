<?php

function formatDate($date) {

    $datetime = new DateTime($date);
    
    return $datetime->format('d/m/Y');
}

$input_date = "2023-09-21";
$output_date = formatDate($input_date);
echo $output_date; 
?>