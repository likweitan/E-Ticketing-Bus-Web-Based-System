<?php
 require("loginheader.php");
<<<<<<< HEAD
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
=======
 $accountno = $_SESSION['id'];
        $PaymentType = $_POST['PaymentType'];
        $CardName = $_POST['CardName'];
        $CardNumber = $_POST['CardNumber'];
        $CardExpiration = $_POST['CardExpiration'];
        $cvv = $_POST['CVV'];

        $bookingno = rand();
        $promocode = $_GET['promocode'];
        $scheduleno = $_GET['scheduleno'];
        $quantity = 1;
        $seatno = $_GET['seatno'];
        $busdatetime = $_GET['inputdate'];
        $bookingstate = "Confirmed";
    
        $insertPayment =  mysqli_query($con,"INSERT INTO payment (PaymentType,CardName,CardNumber,CardExpiration,CVV,AccountNo)
        VALUES('$PaymentType', '$CardName', $CardNumber, '$CardExpiration',$cvv,$accountno)");

        
        $sql = "SELECT PaymentNo FROM payment WHERE AccountNo =".$accountno." ORDER BY PaymentNo DESC LIMIT 1";
        $query = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($query);
        if($row)
        {
            $PaymentNo = $row['PaymentNo'];
        }

        echo "INSERT INTO booking (BookingNo,AccountNo,PromoCode,ScheduleNo,Quantity,BusSeat,BusDateTime,BookingState,PaymentNo)
        VALUES('$bookingno','$accountno','$promocode', '$scheduleno', '$quantity', '$seatno', '$busdatetime', '$bookingstate', '$PaymentNo')";
        $insertBooking =  mysqli_query($con,"INSERT INTO booking (BookingNo,AccountNo,PromoCode,ScheduleNo,Quantity,BusSeat,BusDateTime,BookingStatus,PaymentNo)
        VALUES('$bookingno','$accountno','$promocode', '$scheduleno', '$quantity', '$seatno', '$busdatetime', '$bookingstate', '$PaymentNo')");

        header('Location: managebooking.php');
>>>>>>> 0b96fa0d3fa759d9dd2ccf9f5f75226cee03eaa1
?>