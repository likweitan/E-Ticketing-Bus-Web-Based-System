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

    <title>blueBus - Home</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Aos.js -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

    <!-- HEADER-->
  <?php
    include('assets/header.php');
  ?>
 
    <main role="main">
    <section class="jumbotron text-center" style="background-image: url('images/malaysia.jpg');" >
        <div class="container"  data-aos="fade-up" data-aos-duration="3000">
          <h1 class="jumbotron-heading" style="color:white;">Discover the treasures of Malaysian culture</h1>
          <p class="lead text-muted" style="color:#f8f9fa!important">with blueBus</p>
    
    <!-- Book  Ticket Start Here-->
    <form action="search.inc.php" method="get">
    <div class="form-row  col-md-12">
       <div class="form-group col-md-4 text-left">
          <label for="inputFrom"  style="color:white;">From</label>
             <span style="color: red !important; display: inline; float: none;">*</span> 
               <select id="inputFrom" name="inputFrom" class="form-control" required>
                <option value="From...">From...</option>
                <option value="Johor Bahru">Johor Bahru</option>
                <option value="Malacca City">Malacca City</option>
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Genting Highland">Genting Highland</option>
                <option value="Penang">Penang (George Town)</option>
                <option value="Ipoh">Ipoh</option>
               </select>
         </div>

        <div class="form-group col-md-4 text-left">
          <label for="inputTo" style="color:white;">To</label>
            <span style="color: red !important; display: inline; float: none;">*</span> 
              <select id="inputTo" name="inputTo" class="form-control" required>
               <option value="To...">To...</option>
               <option value="Johor Bahru">Johor Bahru</option>
                <option value="Malacca City">Malacca City</option>
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Genting Highland">Genting Highland</option>
                <option value="Penang">Penang (George Town)</option>
                <option value="Ipoh">Ipoh</option>
             </select>
         </div>

    
    <div class="form-group col-md-4 text-left">
    <label for="inputDepartDate" style="color:white;">Depart Date</label>
      <span style="color: red !important; display: inline; float: none;">*</span> 

      <input type="date" class="form-control" id="inputDepartDate" name="inputDepartDate"  >
    </div>
   
  </div>
          <p class="text-right">
            <button class="btn btn-primary my-2" id="book_ticket" name="book_ticket">Book Ticket</button>
          </p>
        </div>
        </form>
      </section>
   
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
        <div class="row" data-aos="fade" data-aos-duration="2000">
      <div class="alert alert-danger col-md-10 offset-md-1">
       <strong>Attention!</strong> Due to the impact of covid-19, please pay attention to personal hygiene and wear masks if necessary.
       <br>For more information, please refer to <a href="https://www.bing.com/covid/local/malaysia?form=WSHCOV">this website.</a>
    </div>
    </div>
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4" data-aos="fade" data-aos-duration="3000">
            <img class="rounded-circle" src="images/legoland.jpg" alt="Legoland image" width="140" height="140">
            <h2>MYNEW</h2>
            <p>Upto 10% discount + 10 RM cashback</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" data-aos="fade" data-aos-duration="3000">
            <img class="rounded-circle" src="images/theme_park.jpg" alt="Theme Park image" width="140" height="140">
            <h2>MYOFFER</h2>
            <p>Get upto 15% cashback</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" data-aos="fade" data-aos-duration="3000">
            <img class="rounded-circle" src="images/lostworld.jpeg" alt="Lost World image" width="140" height="140">
            <h2>RBKT</h2>
            <p>upto 10% Discount</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-left" data-aos-duration="2000">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="images/melaka.jpg" alt="Melaka image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-right" data-aos-duration="2000">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="images/penang.jpg" alt="Penang image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-left" data-aos-duration="2000">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="images/ipoh.png" alt="Ipoh placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2020 blueBus Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
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
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://cdn.jsdelivr.net/npm/holderjs@2.9.7/holder.min.js"></script>
    <!-- Aos.js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  </body>
</html>
