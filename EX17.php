<?php
$tableau = "password";
function verificationPassword($tableau) {
    if (strlen($tableau) >= 8) {
        return true; 
}
return false; 
}
?>