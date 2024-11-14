<?php
$ligne = 10;
function triangle($ligne) {
    for ($i = 0; $i < $ligne; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n"; 
    }
}
triangle($ligne);
?>
