<?php
        include "../configs/DbConn.php"

        else{
            $sql = "DELETE FROM authorsdb WHERE ";

            if($DbConn->query($sql) === true){
                echo "<script language='javascript'>
                    alert ('DELETED!');
                    window.location='../ViewAuthors.php';
                </script>";
            } 
            else{
                echo "ERROR: Could not able to execute $sql. " . $DbConn->error;
            }
        }

?>