<?php
 require("db.php");

 $seatno = $_GET["seatno"];
 $inputDepartDate = $_GET['inputdate'];
 $scheduleno1 = $_GET['scheduleno'];
 $TicketPrice = $_GET['TicketPrice'];
 
     if(isset($_POST['Reedem'])){
        $PromoCode = $_POST['PromoCode'];
        $promo = mysqli_query($con,"SELECT * FROM promo_code WHERE PromoCode = '$PromoCode' ");
        $rows = mysqli_num_rows($promo);
    	if ($rows==1){
	    while($rs = mysqli_fetch_array($promo)){
            $valid = $rs['PromoCode'];
            $ScheduleNo = $rs['ScheduleNo'];
            $promopercentage = $rs['PromoPercentage'];
        }
       }

        if($PromoCode==$valid && $scheduleno1 == $ScheduleNo ){
            $TotalPrice = $TicketPrice - ($TicketPrice * $valid/100);
            header("location: payment.php?seatno=".$seatno."&inputdate=".$inputDepartDate."&scheduleno=".$scheduleno1."&PromoCode=".$PromoCode."&TicketPrice=".$TotalPrice);
            }
            else
            echo"invalid Code";
        }  
   
?>