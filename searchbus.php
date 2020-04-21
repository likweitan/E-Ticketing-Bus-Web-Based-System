<?php
    require("db.php");
    require("loginheader.php");
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


  <!-- Start Body -->
    <body class="bg-light">
      <!-- HEADER-->
       <?php
        include('assets/header.php');
       ?>

   <!-- Search Bus Ticket Start Here -->  
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
                   <select id="inputFrom" name="inputFrom" class="form-control" required>
                      <option selected>From...</option>
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
                   <select id="inputTo" name="inputTo" class="form-control" required>
                      <option selected>To...</option>
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

           <?php
        if(!empty($_GET["error"]))
        {
          echo '<div class="alert alert-primary" role="alert">';
          if($_GET["error"] == "invalid_from"){
            echo "Please select where your journey start";
          }
          else if($_GET["error"] == "invalid_to"){
            echo "Please select where your journey end";
          }
          else {
            echo "Please select your journey date";
          }
           echo '</div>';
        }
      ?>
              <!-- Book Ticket -->
               <p class="text-right">
               <button class="btn btn-primary my-2" id="book_ticket" name="book_ticket">Book Ticket</button>
               </p>
          </div>
        </form>
       </div>
      </div>
    <!--End of Book Ticket -->

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

