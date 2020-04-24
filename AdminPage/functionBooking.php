<?php
    
    
    include("../db.php");
    session_start();

    $bkNo = '';
    $acctNo ='';
    $prCode ='';
    $scNo ='';
    $quant ='';
    $buSeat ='';
    $buDtime ='';
    $boStatus ='';
    $boTstamp ='';
    $paym ='';
    $update = false;

    if(isset($_GET['edit']))
	{
        // get values 
		$sBooking = $_GET['edit'];
        $update = true;
        $result = $con->query("SELECT * FROM booking WHERE BookingNo = '$sBooking'");
        if (mysqli_num_rows($result)==1){
            $row = $result->fetch_array();
            $bkNo = $row['BookingNo'];
            $acctNo = $row['AccountNo'];
            $prCode = $row['PromoCode'];
            $scNo = $row['ScheduleNo'];
            $quant = $row['Quantity'];
            $buSeat = $row['BusSeat'];
            $buDtime = $row['BusDateTime'];
            $paym = $row['PaymentNo'];
            $boStatus = $row['BookingStatus'];
            $boTstamp = $row['BookingTimestamp'];   
        }  
    }
    if(isset($_POST['uBooking']))
    {
        
        $BookN =$_POST['bookNo'];
        $quanti =$_POST['quan'];
        $busS =$_POST['bSeat'];
        $bookStatus =$_POST['bStatus'];
        $query = "UPDATE booking SET Quantity = '$quanti', BookingStatus ='$bookStatus',
                    BusSeat = $busS WHERE BookingNo = '$BookN'";
        //Past data information to database
        if (!$result = mysqli_query($con,$query)) {
            exit(mysqli_error($con));
            
        }
       
            
        header("location: manageBooking.php");
    }
?>