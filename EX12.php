<?php
$argument1 = 15;
$argument2 = 10;
$argument3 = 12;

function plusPetit($argument1, $argument2, $argument3) {
    if ($argument1 < $argument2 && $argument1 < $argument3) {
        return $argument1;
    } elseif ($argument2 < $argument3) {
        return $argument2;
    }
    return $argument3;
}
?>