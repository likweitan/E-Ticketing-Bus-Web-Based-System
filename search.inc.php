<?php
    require("db.php");
    require("loginheader.php");

    if(isset($_POST['book_ticket'])){
    $inputFrom = $_POST["inputFrom"];
    $inputTo = $_POST["inputTo"];
    $inputDepartDate = $_POST["inputDepartDate"];
    $busInfo = mysqli_query($con,"SELECT * FROM bus_schedule WHERE ScheduleDepart = '$inputFrom' AND ScheduleArrive = '$inputTo'");
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
        <div data-aos="fade-left" data-aos-duration="2000">
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h5 class="border-bottom border-gray pb-2 mb-0">Here is your bus information </h5>
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Bus No</th>
      <th scope="col">Origin</th>
      <th scope="col">Destination</th>
      <th scope="col">Duration</th>
      <th scope="col">Ticket Price</th>
    </tr>
  </thead>
  <tbody>
  <?php  

  while($row = mysqli_fetch_array($busInfo))
  {
    echo "
        <tr>";
            echo "<td>";
            echo $inputDepartDate;
            echo "</td>";
            echo "<td>";
            echo $row['ScheduleStartTime'];
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
            echo "</td></tr>";       
    
}
?>
  </tbody>
</table>
      </div>
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
    <!-- Aos.js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  </body>
</html>
