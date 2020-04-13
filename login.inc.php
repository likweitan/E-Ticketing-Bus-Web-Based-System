<?php
    require("db.php");

    session_start();

    $email = $_POST["email"];
    $password = $_POST["password"];

    if($email == "admin" && $password == "admin")
    {
        header("location: index.php");
        $_SESSION["username"] = "admin";
    }
    else
    {
        header("location: login.php");
    }

    echo $email;
?>