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
            $firstName = $row['FirstName'];
            $lastName = $row['LastName'];
            $email = $row['Email'];
            $quantity = $row['Quantity'];
            $ticketPrice = $row['TicketPrice'];
        }
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
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
                                <img src="images/logo_black.png" style="width:20%; max-width:500px;">
                            </td>
                            
                            <td>
                                Booking No: <?=$bookingNo?><br>
                                Date Purchased: <?=$purchasedDate?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Sparksuite, Inc.<br>
                                12345 Sunny Road<br>
                                Sunnyville, CA 12345
                            </td>
                            
                            <td>
                                <?=$firstName." ".$lastName?><br>
                                <?=$email?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    
                </td>
                <td>
                    Remarks
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Debit
                </td>
                <td></td>
                <td>
                    1000
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Quantity
                </td>

                <td>
                    Price
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Bus Ticket
                </td>
                
                <td>
                    <?=$quantity?>
                </td>

                <td>
                    $300.00
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                <td>
                   Total:
                </td>
                <td>
                   $385.00
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
