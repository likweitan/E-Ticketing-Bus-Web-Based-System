<?php
     $servername = "paneldatabase.humbleservers.com";
     $username = "u900_jJRVC99eMW";
     $password = "Gm+56vHMw+G^0U^@VhIaM9CQ";
    $databasename = "s900_database";

    $con = mysqli_connect($servername,$username,$password,$databasename);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        header("location: index.php?error=offline");
    }
?>