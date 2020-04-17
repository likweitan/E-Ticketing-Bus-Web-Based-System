<?php
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

    <title>blueBus - Setting</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Aos.js -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
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
      
    <div data-aos="zoom-out">
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Membership</h6>
        <div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <br>
    <div class="media-body pb-3 mb-0 small lh-125">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Member</strong>
              <a href="#">View Tier Benefits</a>
            </div>
            <span class="d-block">Get 2,304 more points to upgrade to silver.</span>
          </div>
      </div>
      
      </div>

    <div data-aos="zoom-out">
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Account</h6>
        <div class="media text-muted pt-3">
          <img src="https://raw.githubusercontent.com/google/material-design-icons/master/communication/2x_web/ic_email_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Email</strong>
              <a href="#">Edit</a>
            </div>
            <span class="d-block"><?=$myEmail?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">
        <img src="https://raw.githubusercontent.com/google/material-design-icons/master/communication/2x_web/ic_phone_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Contact number</strong>
              <a href="#">Edit</a>
            </div>
            <span class="d-block">012-29399329932</span>
          </div>
        </div>
        <div class="media text-muted pt-3">
        <img src="https://raw.githubusercontent.com/google/material-design-icons/master/action/2x_web/ic_lock_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Password</strong>
              <a href="#">Reset password</a>
            </div>
            <span class="d-block">Last changed: 24/02/2020</span>
          </div>
        </div>
      </div>
      </div>

      <div data-aos="zoom-out">
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Profile</h6>
        <div class="media text-muted pt-3">
          <img src="https://raw.githubusercontent.com/google/material-design-icons/master/social/2x_web/ic_person_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Name</strong>
              <a href="#">Edit</a>
            </div>
            <span class="d-block"><?=$myFirstName." ".$myLastName?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">
        <img src="https://raw.githubusercontent.com/google/material-design-icons/master/action/2x_web/ic_accessibility_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Gender</strong>
              <a href="#">Edit</a>
            </div>
            <span class="d-block"><?=$myGender?></span>
          </div>
        </div>

        <div class="media text-muted pt-3">
        <img src="https://raw.githubusercontent.com/google/material-design-icons/master/social/2x_web/ic_cake_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Date of Birth</strong>
              <a href="#">Edit</a>
            </div>
            <span class="d-block">Last changed: 24/02/2020</span>
          </div>
        </div>

        <div class="media text-muted pt-3">
        <img src="https://raw.githubusercontent.com/google/material-design-icons/master/maps/2x_web/ic_my_location_black_48dp.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Country / Region</strong>
              <a href="#">Edit</a>
            </div>
            <span class="d-block"><?=$myCountry?></span>
          </div>
        </div>
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
