<?php

    require("db.php");

session_start();

if(isset($_SESSION['id']))
{
    $sql = "SELECT *,
            YEAR(AccountTimestamp) AS SinceYear
            FROM account
            WHERE AccountNo =".$_SESSION['id'];
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

    if($row)
    {
        $myFirstName = $row['FirstName'];
        $myLastName = $row['LastName'];
        $sinceYear = $row['SinceYear'];
    }
}

?>