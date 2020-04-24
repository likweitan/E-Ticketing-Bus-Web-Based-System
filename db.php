<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "s900_database";

    $con = mysqli_connect($servername,$username,$password,$databasename);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        header("location: index.php?error=offline");
    }
?>