<?php
 require("db.php");
 $seatno = $_GET["seatno"];
 $inputDepartDate = $_GET['inputdate'];
 $scheduleno1 = $_GET['scheduleno'];
 $TicketPrice = $_GET['TicketPrice'];
 
     if(isset($_GET['Reedem'])){
        $PromoCode = $_GET['PromoCode'];
        $promo = mysqli_query($con,"SELECT PromoCode,ScheduleNo FROM promo_code INNER JOIN bus_schedule 
        ON promo_code.ScheduleNo = bus_schedule.ScheduleNo WHERE PromoCode = '$PromoCode' ");
        $row = mysqli_fetch_array($promo);
   
   if($row)
   {
       $ScheduleNo = $row['ScheduleNo'];
       $valid = $row['PromoCode'];
   }

        if($PromoCode==$ScheduleNo &  $scheduleno1==$valid){
            $TotalPrice = $TicketPrice - ($TicketPrice * $valid/100);
            header("location: payment.php?scheduleno=".$scheduleno1."&PromoCode=".$PromoCode."&TicketPrice=".$TotalPrice);
            }
            else
            echo"invalid Code";
        }
?>