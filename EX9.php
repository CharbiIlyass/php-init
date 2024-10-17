<?php
$age=5;
function estIlMajeure($age){  
    if($age>=18){
        return true;
    }elseif($age<18){
        return false;
    }
    return $age;
}
?>
