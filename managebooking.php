<?php
  require("loginheader.php");

    if(isset($_SESSION['id']))
    {
        $sql = "SELECT *, DATE(BusDateTime) AS ScheduleDate FROM s900_database.booking
        RIGHT JOIN s900_database.bus_schedule ON s900_database.booking.ScheduleNo = s900_database.bus_schedule.ScheduleNo 
        WHERE AccountNo =".$_SESSION['id'];
        $query = mysqli_query($con,$sql);
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

    <title>blueBus - Manage Bookings</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
  </head>

  <body class="bg-light">

  <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">
    <img src="images/logo_white.png" width="30" height="30" class="d-inline-block align-top" alt="">
    
  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promotions</a>
            </li>
          </ul>
            <?php
            if(isset($_SESSION['id']))
            {
          echo '<form class="form-inline"><div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                echo $myFirstName." ".$myLastName;
              echo '</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="setting.php">Setting</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div></form>';
            }
            else
            {
              echo '<form class="form-inline mt-2 mt-md-0" action="login.php">
              <button type="submit" class="btn btn-outline-warning my-2 my-sm-0">Login</button>
              </form>';
            }
            ?>
          
        </div>
        
      </nav>
    </header>

    <main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <img class="mr-3" src="https://www.mc-heads.net/avatar/1/100/nohelm.png" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100"><?=$myFirstName." ".$myLastName?></h6>
          <small>Since <?=$sinceYear?></small>
        </div>
      </div>

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h5 class="border-bottom border-gray pb-2 mb-0">Your upcoming bookings</h5>
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Origin</th>
      <th scope="col">Destination</th>
      <th scope="col">Booking number</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php  
  while($row = mysqli_fetch_array($query))
  {
    echo "
        <tr>
            <td>";
            echo $row['ScheduleDate'];
            echo "</td>";
            echo "<td>";
            echo $row['ScheduleStartTime'];
            echo "</td>";
            echo "<td>";
            echo $row['ScheduleDepart'];
            echo "</td>";
            echo "<td>";
            echo $row['ScheduleArrive'];
            echo "</td>";
            echo "<td>";
            echo $row['BookingNo'];
            echo "</td>";
            echo "<td><a href='viewbooking.php?bookingno=";
            echo $row['BookingNo'];
            echo "'>Confirmed</a></td>
        </tr>
    ";
}
?>
  </tbody>
</table>
<small class="d-block text-right mt-3">
          <a href="#">More</a>
        </small>
      </div>

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h5 class="border-bottom border-gray pb-2 mb-0">Your past bookings</h5>
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Origin</th>
      <th scope="col">Destination</th>
      <th scope="col">Booking number</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
   
    <tr>
      <td>Sat, 9 May 2020</td>
      <td>19:00</td>
      <td>Johor Bahru</td>
      <td>Kuala Lumpur</td>
      <td>G59D7N</td>
      <td><a>Completed</a></td>
    </tr>
    <tr>
      <td>Sat, 9 May 2020</td>
      <td>19:00</td>
      <td>Johor Bahru</td>
      <td>Kuala Lumpur</td>
      <td>G59D7N</td>
      <td><a>Completed</a></td>
    </tr>
  </tbody>
</table>
<small class="d-block text-right mt-3">
          <a href="#">More</a>
        </small>
      </div>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/holderjs@2.9.7/holder.min.js"></script>
    <script src="js/offcanvas.js"></script>
  </body>
</html>
