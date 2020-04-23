<?php
    require("loginheader.php");
    $promo = mysqli_query($con,"SELECT * FROM promo_code");
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
              <label for="desctiption"  style="color:white;"><h5>Promotion by Blue bus</h5></label>
            </div>
          </div>
        </form>
       </div>
      </div>
    <!--End of Book Ticket -->

    <!-- Bus Result Table -->
      <div data-aos="fade-left" data-aos-duration="2000">
        <div class="my-3 p-3 bg-white rounded box-shadow">
           <h5 class="border-bottom border-gray pb-2 mb-0">Here is your promotion. Book Ticket today and use it! </h5>
             <table class="table table-hover">
              <thead>
               <tr>
                 <th scope="col">Promo Code</th>
                 <th scope="col">Description</th>
                 <th scope="col">Promo Percentage</th>
                 <th scope="col">Start Date</th>
                 <th scope="col">End Date</th>
                </tr>
              </thead>
            
          <!--Display Search Bus Ticket Resuly -->
           <tbody>
            <?php  
               while($row = mysqli_fetch_array($promo))
               {
               echo "<tr>";
               echo "<td>";
               echo $row['PromoCode'];
               echo "</td>";
               echo "<td>";
               echo $row['PromoCodeDescription'];
               echo "</td>";
               echo "<td>";
               echo $row['PromoPercentage']."%";
               echo "</td>";
               echo "<td>";
               echo $row['PromoCodeStartTimestamp'];
               echo "</td>";
               echo "<td>";
               echo $row['PromoCodeEndTimestamp'];
               echo "</td>";
               echo "<td><a href='searchbus.php?promocode=".$row['PromoCode'];
               echo "'>Use</a></td></tr>";        
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
