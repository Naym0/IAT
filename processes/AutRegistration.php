<?php

    include "../configs/DbConn.php";

    if(isset($_POST['submit'])){
        
        //get details from the form

        $id = "";
        $fname = $DbConn->real_escape_string($_REQUEST["names"]);
        $email = $DbConn->real_escape_string($_REQUEST["email"]);
        $address = $DbConn->real_escape_string($_REQUEST["address"]);
        $biography = $DbConn->real_escape_string($_REQUEST["bio"]);
        $dob = $DbConn->real_escape_string($_REQUEST["dob"]);
        $suspend =  $DbConn->real_escape_string($_REQUEST["sus"]);

        //validation
            $userExists= $DbConn->query("SELECT * FROM authorsdb WHERE AuthorEmail='$email'");
                if ($userExists->num_rows>0) {
                    echo "<script language='javascript'>
                        alert('User with this email exists.');
                        window.location='../index.php';
                        </script>";
                }
                 
        //query
        else{
            $sql = "INSERT INTO authorsdb (AuthorId,AuthorFullName,AuthorEmail,AuthorAddress,AuthorBiography,AuthorDateOfBirth,AuthorSuspended) VALUES ('$id','$fname','$email','$address','$biography','$dob','$suspend')";

            if($DbConn->query($sql) === true){
                echo "<script language='javascript'>
                    alert ('You have been Registered. WELCOME!');
                    window.location='../ViewAuthors.php';
                </script>";
            } 
            else{
                echo "ERROR: Could not able to execute $sql. " . $DbConn->error;
            }
        }
    }
?>