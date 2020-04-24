<?php
  require("loginheader.php");

  if(!isset($_SESSION['id']))
    {
        header('Location: login.php');
    }

  $sql = "SELECT SUM(TicketPrice) AS Total FROM booking
        RIGHT JOIN bus_schedule ON booking.ScheduleNo = bus_schedule.ScheduleNo
        WHERE AccountNo = ".$_SESSION['id'];
        $query = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($query);

        if($row['Total'])
        {
            $total = $row['Total'];
        }
        else
        {
          $total = 0;
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

    <title>blueBus - Setting</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Aos.js -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- datepicker -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>

    <style>
    #message {
        position: fixed;
        top: 90%;
        left: 70%;
        width: 30%;
        z-index: 20;
    }
    #inner-message {
        margin: 0 auto;
    }
    </style>
  </head>

  <body class="bg-light">
  

  <!-- HEADER-->
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
              <a class="nav-link" href="searchbus.php">Search Ticket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="promotion.php">Promotions</a>
            </li>
            <?php if(isset($_SESSION['id']))
            {
            echo '
            <li class="nav-item">
              <a class="nav-link" href="managebooking.php">My Bookings</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="setting.php">My Account</a>
            </li>';
            }; ?>
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
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="managebooking.php">Manage Booking</a>
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
  
<?php
        if(!empty($_GET["phone"]))
        {
          echo '<div id="message">
          <div style="padding: 5px;">
          <div id="inner-message" class="alert alert-warning" role="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>';
          if($_GET["phone"] == "success")
            echo "Your phone number has been updated";
          else
            echo "Your phone number has not been updated";
           echo '</div>
           </div>
       </div>';
        }
        else if(!empty($_GET["email"]))
        {
          echo '<div id="message">
          <div style="padding: 5px;">
          <div id="inner-message" class="alert alert-warning" role="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>';
          if($_GET["email"] == "success")
            echo "Your email has been updated";
          else
            echo "Your email has not been updated";
           echo '</div>
           </div>
       </div>';
        }
        else if(!empty($_GET["name"]))
        {
          echo '<div id="message">
          <div style="padding: 5px;">
          <div id="inner-message" class="alert alert-warning" role="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>';
          if($_GET["name"] == "success")
            echo "Your name has been updated";
          else
            echo "Your name has not been updated";
           echo '</div>
           </div>
       </div>';
        }
        else if(!empty($_GET["gender"]))
        {
          echo '<div id="message">
          <div style="padding: 5px;">
          <div id="inner-message" class="alert alert-warning" role="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>';
          if($_GET["gender"] == "success")
            echo "Your gender has been updated";
          else
            echo "Your gender has not been updated";
           echo '</div>
           </div>
       </div>';
        }
        else if(!empty($_GET["birthdate"]))
        {
          echo '<div id="message">
          <div style="padding: 5px;">
          <div id="inner-message" class="alert alert-warning" role="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>';
          if($_GET["birthdate"] == "success")
            echo "Your birthday has been updated";
          else
            echo "Your birthday has not been updated";
           echo '</div>
           </div>
       </div>';
        }
        else if(!empty($_GET["country"]))
        {
          echo '<div id="message">
          <div style="padding: 5px;">
          <div id="inner-message" class="alert alert-warning" role="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>';
          if($_GET["country"] == "success")
            echo "Your country has been updated";
          else
            echo "Your country has not been updated";
           echo '</div>
           </div>
       </div>';
        }
  ?>
    <main role="main" class="container">
    
      <div data-aos="zoom-out">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <img class="mr-3" src="https://www.mc-heads.net/avatar/1/100/nohelm.png" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100"><?=$myFirstName." ".$myLastName?></h6>
          <small>Since <?=$sinceYear?></small>
        </div>
          </div>
      </div>
      
      <!-- points -->
      

    <div data-aos="fade-zoom-in">
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Membership</h6>
        <div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$total?>%" aria-valuenow="<?=$total?>" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <br>
    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Member</strong>
              <a href="#" data-toggle="modal" data-target="#viewTierBenefits">View Tier Benefits</a>
            </div>
            <span class="d-block">Get <?=1000-$total?> more points to upgrade to silver.</span>
          </div>
      </div>
      
      </div>

            

    <div data-aos="fade-right">
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Account</h6>
        <div class="media text-muted pt-3">
          <img src="https://raw.githubusercontent.com/google/material-design-icons/master/communication/2x_web/ic_email_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Email</strong>
              <a href="#" data-toggle="modal" data-target="#editEmail">Edit</a>
            </div>
            <span class="d-block"><?=$myEmail?></span>
          </div>
          
        </div>
        <div class="media text-muted pt-3">
        <img src="https://raw.githubusercontent.com/google/material-design-icons/master/communication/2x_web/ic_phone_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Contact number</strong>
              <a href="#" data-toggle="modal" data-target="#editPhone">Edit</a>
            </div>
            <span class="d-block"><?=$myPhoneNo?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">
        <img src="https://raw.githubusercontent.com/google/material-design-icons/master/action/2x_web/ic_lock_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Password</strong>
              <a href="#" data-toggle="modal" data-target="#editPassword">Reset password</a>
            </div>
            <span class="d-block">Last changed: <?=$myStartDate?></span>
          </div>
        </div>
      </div>
      </div>

      <div data-aos="fade-left">
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Profile</h6>
        <div class="media text-muted pt-3">
          <img src="https://raw.githubusercontent.com/google/material-design-icons/master/social/2x_web/ic_person_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Name</strong>
              <a href="#" data-toggle="modal" data-target="#editName">Edit</a>
            </div>
            <span class="d-block"><?=$myFirstName." ".$myLastName?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">
        <img src="https://raw.githubusercontent.com/google/material-design-icons/master/action/2x_web/ic_accessibility_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Gender</strong>
              <a href="#" data-toggle="modal" data-target="#editGender">Edit</a>
            </div>
            <span class="d-block"><?=$myGender?></span>
          </div>
        </div>

        <div class="media text-muted pt-3">
        <img src="https://raw.githubusercontent.com/google/material-design-icons/master/social/2x_web/ic_cake_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Date of Birth</strong>
              <a href="#" data-toggle="modal" data-target="#editBirthDate">Edit</a>
            </div>
            <span class="d-block"><?=$myBirthDate?></span>
          </div>
        </div>

        <div class="media text-muted pt-3">
        <img src="https://raw.githubusercontent.com/google/material-design-icons/master/maps/2x_web/ic_my_location_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Country / Region</strong>
              <a href="#" data-toggle="modal" data-target="#editCountry">Edit</a>
            </div>
            <span class="d-block"><?=$myCountry?></span>
          </div>
        </div>
      </div>
      </div>
    </main>

    <?php 

  include("assets/modal.php");
    ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/holderjs@2.9.7/holder.min.js"></script>
    <script src="js/offcanvas.js"></script>
    <!-- Aos.js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- datepicker -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script type="text/javascript">
        $('#datepicker').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: false,
        });
    </script>
  </body>
</html>
