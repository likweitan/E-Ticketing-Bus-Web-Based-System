<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();

if(!isset($_SESSION['username']) && basename($_SERVER['PHP_SELF']) != "login.php")
{
    //header("location:login.php");
}
else if(isset($_SESSION['username']) && basename($_SERVER['PHP_SELF']) != "index.php")
{
    //header("location:index.php");
}

?>