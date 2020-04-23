<?php
    require("db.php");

    session_start();

    $inputEmail = $_POST["inputEmail"];
    $inputPassword = md5($_POST["inputPassword"]);

    $stmt = $con->prepare("SELECT AccountNo,Email,Password FROM account WHERE Email = ?");
    $stmt -> bind_param("s", $inputEmail);
    $stmt -> execute();
    $stmt -> store_result();

    if($stmt -> num_rows > 0)
    {
        $stmt -> bind_result($accountNo,$accountEmail,$accountPassword);
        $stmt -> fetch();
        
        if($inputPassword == $accountPassword)
        {
            $_SESSION["id"] = $accountNo;
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