<?php

    include "constants.php";

    //Database connections

    $DbConn = new mysqli ($host,$username,$password,$db);

    if ($DbConn === false){
        echo "ERROR!";
    }
    
?>