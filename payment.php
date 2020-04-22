<?php
    require("db.php");
    require("loginheader.php");
  
        $inputFrom = $_GET['inputFrom'];
        $inputTo = $_GET["inputTo"];
        $inputDepartDate = $_GET["inputDepartDate"];
        $BusCompany = $_GET["BusCompany"];
        $seatno = $_GET["seatno"];
        $busno = $_GET["busno"];
        $TicketPrice = $_GET["TicketPrice"];
        $ScheduleDuration = $_GET["ScheduleDuration"];
        $inputTime = $_GET["inputTime"];

        
    
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>blueBus - Payment</title>

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
    <div class="container">
      <div class="py-5 text-center">
        <h2>Almost Done!</h2>
        <p class="lead">Please read your booking details clearly before make payment.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your Booking Details</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed" style="border:0px">
              <div>
                <h6 class="my-0">Bus Company</h6>
              </div>
              <span class="text-muted"><?php echo"$BusCompany"; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed" style="border:0px">
              <div>
                <h6 class="my-0">Bus No</h6>
              </div>
              <span class="text-muted"><?php echo"$busno"; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed " style="border:0px">
              <div>
                <h6 class="my-0">Origin</h6>
              </div>
              <span class="text-muted"><?php echo"$inputFrom"; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed" style="border:0px">
              <div>
                <h6 class="my-0">Destination</h6>
              </div>
              <span class="text-muted"><?php echo"$inputTo"; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed" style="border:0px">
              <div>
                <h6 class="my-0">Duration</h6>
              </div>
              <span class="text-muted"><?php echo"$ScheduleDuration"; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed " style="border:0px">
              <div>
                <h6 class="my-0">Seat No</h6>
              </div>
              <span class="text-muted"><?php echo"$seatno"; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed" >
              <div>
                <h6 class="my-0">Ticket Price</h6>
              </div>
              <span class="text-muted"><?php echo"$TicketPrice"; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (MYR)</span>
              <strong>$20</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
        <div class="row">
              <div class="col-md-6 mb-3">
              <div class="media text-muted pt-3">
              <img src="images/calendar.png" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
                <label for="cc-name">Date</label>
                </div>
                <strong><?php echo"$inputDepartDate";?></strong>
              </div>
              <div class="col-md-6 mb-3">
              <div class="media text-muted pt-3">
              <img src="images/clock.svg" alt="" class="mr-2 rounded" style="width:10%; max-width:25px;">
                <label for="cc-number">Time</label>
                </div>
                <strong><?php echo"$inputTime"; ?></strong>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
          <form class="needs-validation" novalidate>
            <hr class="mb-4">
            
            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
