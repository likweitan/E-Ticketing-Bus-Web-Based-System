<?php
    require("loginheader.php");

    function getAll() {
        echo "&busno=".$_GET['busno']."&inputDepartDate=".$_GET['inputDepartDate']."&inputTo=".$_GET['inputTo']."&inputFrom=".$_GET['inputFrom']."&inputTime=".$_GET['inputTime'];
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


  <!-- Start Body -->
    <body class="bg-light">
      <!-- HEADER-->
       <?php
        include('assets/header.php');
       ?>

   <!-- Search Bus Ticket Start Here -->  
    <main role="main" class="container">
    <div data-aos="zoom-out">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <img class="mr-3" src="https://www.mc-heads.net/avatar/1/100/nohelm.png" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white"><?=$_GET['busno']?></h6>
          <h6 class="mb-0 text-white"><?=$_GET['inputDepartDate']." ".$_GET['inputTime']?></h6>
          <h6 class="mb-0 text-white"><?=$_GET['inputFrom']." TO ".$_GET['inputTo']?></h6>
        </div>
          </div>
      </div>

      <div data-aos="fade-zoom-in">
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Seats</h6>
        <br>
        <div class="container">
        <div class="row">
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary"><a href=“payment.php?seatno=3<?=getAll()?>”>03</a></button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">06</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">09</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">12</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">15</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">18</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">21</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">24</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">27</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">30</button>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">02</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">05</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">08</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">11</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">14</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">17</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">20</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">23</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">26</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">29</button>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">01</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">04</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">07</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">10</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">13</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">16</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">19</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">22</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">25</button>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-outline-primary">28</button>
    </div>
  </div>
</div>
      </div>
      
      </div>


     </main>

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