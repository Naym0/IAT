<!Doctype html>
<head>
<title> View Authors </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    button{
        color; black;
    }
</style>
</head>

<body>
<table class="table table-striped" id="table">
    <thead>
        <tr>
            <th>ID Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Biography</th>
            <th>DOB</th>
            <th>Suspended</th>
            <th>Delete</th>
         </tr>
    </thead>
    <tbody>
                                        
<?php        
        include "configs/DbConn.php";
        $sql = "SELECT * FROM authorsdb ORDER BY AuthorFullName Asc;";
        $query =$DbConn->query($sql);
                
        if ($query->num_rows>0) 
        {
            // output data of each row
            while($row = $query->fetch_array()) 
            {
            echo "<tr><td>". $row["AuthorID"]. "</td><td>". $row["AuthorFullName"]. "</td><td>". $row["AuthorEmail"]."</td><td>". $row["AuthorAddress"]. "</td><td>". $row["AuthorBiography"]. "</td><td>". 
                $row["AuthorDateOfBirth"]."</td><td>".$row["AuthorSuspended"]; "</td>";
?>

        <td><input type='button' value='Delete Row' onclick="myFunction(this)"></tr>


<?php
            }
        }
        else
        {
            echo "0 result";
        }
?>

    </tbody>
</table>
    <script>
        function myFunction(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("table").deleteRow(i);
        }
    </script>
</body>
</html>