<?php
    require("db.php");

    session_start();

    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];

    if($email == "admin@gmail.com" && $password == "admin")
    {
        header("location: index.php");
        $_SESSION["username"] = "admin";
    }
    else if($email == "" || $password == "")
    {
        header("location: login.php?error=empty");
    }
    else
    {
        header("location: login.php?error=wrong");
    }

    echo $email;
?>