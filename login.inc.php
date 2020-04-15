<?php
    require("db.php");

    session_start();

    $inputEmail = $_POST["inputEmail"];
    $inputPassword = $_POST["inputPassword"];

    $stmt = $con->prepare("SELECT Email,Password FROM account WHERE Email = ?");
    $stmt -> bind_param("s", $inputEmail);
    $stmt -> execute();
    $stmt -> store_result();

    if($stmt -> num_rows > 0)
    {
        $stmt -> bind_result($accountEmail,$accountPassword);
        $stmt -> fetch();
        
        if($inputPassword == $accountPassword)
        {
            header("location: index.php");
        }
        else
        {
            header("location: login.php?error=wrong_password");
        }
    }
    else
    {
        header("location: login.php?error=no_account");
    }
?>