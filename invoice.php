<?php
    if(isset($_GET['bookingno']))
    {
        $sql = "SELECT *, DATE(BusDateTime) AS ScheduleDate FROM s900_database.booking
        RIGHT JOIN s900_database.bus_schedule ON s900_database.booking.ScheduleNo = s900_database.bus_schedule.ScheduleNo 
        RIGHT JOIN s900_database.account ON s900_database.booking.AccountNo = s900_database.account.AccountNo 
        WHERE BookingNo = ".$_GET['bookingno'];
        $query = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($query);

        if($row)
        {
            $bookingNo = $row['BookingNo'];
            $purchasedDate = $row['BookingTimestamp'];
            $bookingDate = $row['BusDateTime'];
            $firstName = $row['FirstName'];
            $lastName = $row['LastName'];
            $email = $row['Email'];
            $quantity = $row['Quantity'];
            $ticketPrice = $row['TicketPrice'];
            $depart = $row['ScheduleDepart'];
            $arrive = $row['ScheduleArrive'];
            $seatNo = $row['BusSeat'];
        }
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Receipt</title>
    <link href="css/invoice.css" rel="stylesheet">
</head>

<body>
    <div class="invoice-box" id="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="images/logo_black.png" style="width:20%; max-width:300px;">
                            </td>
                            
                            <td>
                                <p><small>Need Help? Toll Number: +60-339882525 Email: support@bluebus.my</small></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <!-- Trip Details -->
            <tr class="heading">
                <td>
                    TRIP DETAILS
                </td>
                
                <td>
                    
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    KKKL express
                </td>
                <td>
                    <?=$depart." > ".$arrive?>
                    <br>
                    <?=$bookingDate?>
                </td>
            </tr>

            <!-- Boarding Dropping -->
            <tr class="heading">
                <td>
                    TRAVELLER DETAILS
                </td>
                
                <td>
                    
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    <?=$firstName." ".$lastName?>
                    <p><small>Primary Passenger</small></p>
                </td>
                <td>
                    <?=$seatNo?>
                    <p><small>Seat Number</small></p>
                </td>
            </tr>
            <tr class="item">
                <td>
                    <?=$bookingNo?>
                    <br>
                    <p><small>Booking Number</small></p>
                </td>
                <td>
                    <?=$bookingDate?>
                    <br>
                    <p><small>Departure Time</small></p>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    CONTACT DETAILS
                </td>
                <td>
                    
                </td>
            </tr>
            
            <tr class="item">
                <td>
                <?=$email?>
                    <p><small>Email</small></p>
                </td>
                
                <td>
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                <td>
                Total Amount: RM<?=$quantity*$ticketPrice?>
                </td>
            </tr>
        </table>
        <p style="text-align:center;"><img src="https://api.qrserver.com/v1/create-qr-code/?data=<?=$bookingNo?>&amp;size=100x100" alt="<?=$bookingNo?>" title="" /></p>
        <p><strong>Note:</strong> <small>Customers are advised to present a print out of this ticket along with an identity proof to redeem the boarding pass at check-in counter. Failing to
do so, the boarding might be denied.</small></p>
    </div>
</body>
</html>
