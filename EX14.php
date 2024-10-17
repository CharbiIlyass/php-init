
<?php
$tableau = array(
    "fruits"  => "ilyass",
    "numbers" => "2"
    
);

function dernierElementTableau($tableau) {
    if ($tableau == null) {
        return null; 
    }
return end($tableau); 
}
?>
