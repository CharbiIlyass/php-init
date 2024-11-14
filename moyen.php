<?php

function moyenne($notes) {
    if (count($notes) == 0) {
        return 0; 
    }
    $somme = 0;
    foreach ($notes as $note) {
        $somme += $note;
    }
    return $somme / count($notes);
}

?>
