<?php
    require('../loginheader.php');

if(isset($_POST['newEmail']))
{
    $sql = "UPDATE s900_database.account SET Email = '".$_POST['newEmail']."' WHERE AccountNo =".$_SESSION['id'];
    $query = mysqli_query($con,$sql);

    if($query)
    {
        header("Location: ../setting.php?email=success");
    }
    else
    {
        header("Location: ../setting.php?email=fail");
    }
}
?>