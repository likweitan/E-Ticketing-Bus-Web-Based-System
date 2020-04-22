<?php
 require("db.php");
 session_start();
    $_SESSION['id'] = $_GET['AccountNo'];
     if(isset($_GET['book_ticket'])){
        $PaymentType = mysqli_real_escape_string($con, $_POST["PaymentType"]);
        $CardName =  mysqli_real_escape_string($con,$_POST["CardName"]);
        $CardNumber =  mysqli_real_escape_string($con,$_POST["CardNumber"]);
        $CardExpiration =  mysqli_real_escape_string($con, $_POST["CardExpiration"]);
        $CVV = mysqli_real_escape_string($con, $_POST["CVV"]);
        $BusCompany = mysqli_real_escape_string($con, $_POST["BusCompany"]);
        $busno = mysqli_real_escape_string($con, $_POST["busno"]);
        $inputFrom = mysqli_real_escape_string($con, $_POST["inputFrom"]);
        $inputTo = mysqli_real_escape_string($con, $_POST["inputTo"]);
        $ScheduleDuration = mysqli_real_escape_string($con, $_POST["ScheduleDuration"]);
        $seatno = mysqli_real_escape_string($con, $_POST["seatno"]);
        $TicketPrice = mysqli_real_escape_string($con, $_POST["TicketPrice"]);
        $insertPayment =  mysqli_query($con,"INSERT INTO payment (PaymentType,CardName,CardNumber,CardExpiration)
        VALUES('$PaymentType', '$CardName', '$CardNumber', '$CardExpiration') WHERE AccountNo=".$_SESSION['id']);
        $insertBooking =  mysqli_query($con,"INSERT INTO booking (ScheduleDuration,seatno)
        VALUES('$ScheduleDuration', '$seatno') WHERE AccountNo=".$_SESSION['id']);
    }
?>