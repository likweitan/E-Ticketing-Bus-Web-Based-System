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
else if(isset($_POST['newFirstName']) && isset($_POST['newLastName']))
{
    $sql = "UPDATE s900_database.account SET FirstName = '".$_POST['newFirstName']."',
                                            LastName = '".$_POST['newLastName']."' WHERE AccountNo =".$_SESSION['id'];
    $query = mysqli_query($con,$sql);

    if($query)
    {
        header("Location: ../setting.php?name=success");
    }
    else
    {
        header("Location: ../setting.php?name=fail");
    }
}
else if(isset($_POST['newPhone']))
{
    $sql = "UPDATE s900_database.account SET PhoneNumber = '".$_POST['newPhone']."' WHERE AccountNo =".$_SESSION['id'];
    $query = mysqli_query($con,$sql);

    if($query)
    {
        header("Location: ../setting.php?phone=success");
    }
    else
    {
        header("Location: ../setting.php?phone=fail");
    }
}
?>