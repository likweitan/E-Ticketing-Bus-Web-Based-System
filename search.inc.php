<?php
    require("loginheader.php");
    $inputFrom = $_GET["inputFrom"];
    $inputTo = $_GET["inputTo"];
    $inputDepartDate = $_GET["inputDepartDate"];

    if(isset($_GET['book_ticket'])){
     //Input Validation
    if($inputFrom != "From" & $inputTo != "To..." & $inputDepartDate != ""){
    $busInfo = mysqli_query($con,"SELECT * FROM bus_schedule INNER JOIN bus ON bus_schedule.BusNo = bus.BusNo WHERE ScheduleDepart = '$inputFrom' AND ScheduleArrive = '$inputTo'");
    }
    else if($inputFrom == "From..."){
      header("location: searchbus.php?error=invalid_from");
    }
    else if($inputTo == "To..."){
      header("location:searchbus.php?error=invalid_to");
    }
    else{
        header("location:searchbus.php?error=invalid_date");
      }
    }
  
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>blueBus - Search Bus</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Aos.js -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>

  <body class="bg-light">

  <!-- HEADER-->
  <?php
    include('assets/header.php');
  ?>
    
    <main role="main" class="container">

    <!-- Search Bus Ticket Start Here-->
      <div data-aos="zoom-out">
       <div class="container p-3 my-3 bg-purple rounded box-shadow">
         <form action="search.inc.php" method="get">
           <div class="form-row  col-md-12">
            <div class="form-group col-md-4 text-left">

             <!-- Select Bus From (Departure)-->
              <label for="inputFrom"  style="color:white;">From</label>
                <span style="color: red !important; display: inline; float: none;">*</span> 
                   <select id="inputFrom" name="inputFrom" placeholder="<?php echo$inputFrom;?>"class="form-control" required>
                      <option selected><?php echo$inputFrom;?></option>
                      <option value="Johor Bahru">Johor Bahru</option>
                      <option value="Malacca City">Malacca City</option>
                      <option value="Kuala Lumpur">Kuala Lumpur</option>
                      <option value="Genting Highland">Genting Highland</option>
                      <option value="Penang">Penang (George Town)</option>
                      <option value="Ipoh">Ipoh</option>
                   </select>
            </div>

             <!-- Select Bus To (Arrival)-->
            <div class="form-group col-md-4 text-left">
              <label for="inputTo" style="color:white;">To</label>
                <span style="color: red !important; display: inline; float: none;">*</span> 
                   <select id="inputTo" name="inputTo" placeholder="" class="form-control" required>
                      <option selected><?php echo$inputTo;?></option>
                      <option value="Johor Bahru">Johor Bahru</option>
                      <option value="Malacca City">Malacca City</option>
                      <option value="Kuala Lumpur">Kuala Lumpur</option>
                      <option value="Genting Highland">Genting Highland</option>
                      <option value="Penang">Penang (George Town)</option>
                      <option value="Ipoh">Ipoh</option>
                    </select>
             </div>

              <!-- Select Bus Departure Date -->
            <div class="form-group col-md-4 text-left">
               <label for="inputDepartDate" style="color:white;">Depart Date</label>
                 <span style="color: red !important; display: inline; float: none;">*</span> 
                    <input type="date" class="form-control" id="inputDepartDate" placeholder="<?php echo$inputDepartDate;?>" name="inputDepartDate"  >
             </div>
           </div>

              <!-- Book Ticket -->
               <p class="text-right">
               <button class="btn btn-primary my-2" id="book_ticket" name="book_ticket">Search</button>
               </p>
          </div>
        </form>
       </div>
      </div>
    <!--End of Book Ticket -->

    <!-- Bus Result Table -->
      <div data-aos="fade-left" data-aos-duration="2000">
        <div class="my-3 p-3 bg-white rounded box-shadow">
           <h5 class="border-bottom border-gray pb-2 mb-0">Here is your bus information </h5>
             <table class="table table-hover">
              <thead>
               <tr>
                 <th scope="col">Date</th>
                 <th scope="col">Time</th>
                 <th scope="col">Bus Company</th>
                 <th scope="col">Bus No</th>
                 <th scope="col">Origin</th>
                 <th scope="col">Destination</th>
                 <th scope="col">Duration</th>
                 <th scope="col">Ticket Price</th>
                </tr>
              </thead>
            
          <!--Display Search Bus Ticket Resuly -->
           <tbody>
            <?php  
               while($row = mysqli_fetch_array($busInfo))
               {
               echo "<tr>";
               echo "<td>";
               echo $inputDepartDate;
               echo "</td>";
               echo "<td>";
               echo $row['ScheduleStartTime'];
               echo "</td>";
               echo "<td>";
               echo $row['BusCompany'];
               echo "</td>";
               echo "<td>";
               echo $row['BusNo'];
               echo "</td>";
               echo "<td>";
               echo $row['ScheduleDepart'];
               echo "</td>";
               echo "<td>";
               echo $row['ScheduleArrive'];
               echo "</td>";
               echo "<td>";
               echo $row['ScheduleDuration'];
               echo "</td>";
               echo "<td>";
               echo $row['TicketPrice'];
               echo "</td>";
               echo "<td><a href='select_seat.php?scheduleno=";
               echo $row['ScheduleNo'];
               echo "&inputdate=".$inputDepartDate."&TicketPrice=".$row['TicketPrice'];
               echo "'>Select</a></td></tr>";        
              }
            ?>
           </tbody>
        </table>
       </div>
     </div>
     <!-- End of Bus Result Table -->
   </main>
<!--End of the Main -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script>
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("inputDepartDate")[0].setAttribute('min', today);
    </script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/holderjs@2.9.7/holder.min.js"></script>
    <script src="js/offcanvas.js"></script>
    <!-- Aos.js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  </body>
</html>
