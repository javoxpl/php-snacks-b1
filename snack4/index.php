/* Creare un array con 15 numeri casuali, tenendo conto che l’array 
non dovrà contenere lo stesso numero più di una volta */


<?php

$numArray = [];

while (count($numArray) < 15){
    $randomNum = rand(1, 100);
    if (!in_array($randomNum, $numArray)){
        $numArray[] = $randomNum;
    }
}

var_dump($numArray);
