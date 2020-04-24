<?php
 require("loginheader.php");
     if(isset($_GET['book_ticket'])){
        $PaymentType = mysqli_real_escape_string($con, $_POST["PaymentType"]);
        $CardName =  mysqli_real_escape_string($con,$_POST["CardName"]);
        $CardNumber =  mysqli_real_escape_string($con,$_POST["CardNumber"]);
        $CardExpiration =  mysqli_real_escape_string($con, $_POST["CardExpiration"]);
        $CVV = mysqli_real_escape_string($con, $_POST["CVV"]);
        
        
       
        $seatno = mysqli_real_escape_string($con, $_POST["seatno"]);
        $insertPayment =  mysqli_query($con,"INSERT INTO payment (PaymentType,CardName,CardNumber,CardExpiration)
        VALUES('$PaymentType', '$CardName', '$CardNumber', '$CardExpiration') WHERE AccountNo=".$_SESSION['id']);
        $insertBooking =  mysqli_query($con,"INSERT INTO booking (seatno)
        VALUES('$seatno') WHERE AccountNo=".$_SESSION['id']);
    }
    else echo "invalid";
?>