<?php
$argument1 = 10;
$argument2 = 15;

function plusPetit($argument1, $argument2) {
    if ($argument1 < $argument2) {
        return $argument1;  
    } else {
        return $argument2;
    }
}