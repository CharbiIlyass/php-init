<?php
$tableau = array (
    "fruits"  => "ilyass",
    "numbers" => "2",
    "holes"   => "4"
);
function premierElementTableau($tableau) {
    if ($tableau ==0) {
        return null; 
    }
    return $tableau[0]; 
}
?>