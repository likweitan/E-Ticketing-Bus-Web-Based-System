<?php
    require('../loginheader.php');

    if(isset($_GET['bookingno']))
    {
        $sql = "UPDATE s900_database.booking SET BookingStatus = 'Cancelled' WHERE AccountNo =".$_SESSION['id']." AND BookingNo =".$_GET['bookingno'];
        $query = mysqli_query($con,$sql);

        if($query)
        {
            header("Location: ../managebooking.php?cancel=success");
        }
        else
        {
            header("Location: ../managebooking.php?cancel=fail");
        }
    }


?>