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
            <li class="nav-item active">
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
            <li class="nav-item">
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
            <h2>NEW2JB</h2>
            <p>New to JB!</p>
            <p>LEGOLAND Malaysia Resort Johor Bahru - Asia's first LEGOLAND theme park & Malaysia's 1st international theme park.</p>
           
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" data-aos="fade" data-aos-duration="3000">
            <img class="rounded-circle" src="images/theme_park.jpg" alt="Theme Park image" width="140" height="140">
            <h2>NEW2KL</h2>
            <p>Genting Highlands </p>
            <p> One of the reputed names in the hospitality and theme park industry in the world, which provides the top quality found in the rides and activities here.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" data-aos="fade" data-aos-duration="3000">
            <img class="rounded-circle" src="images/lostworld.jpeg" alt="Lost World image" width="140" height="140">
            <h2>OFFERKI</h2>
            <p>Lost World Tambun, Perak</p>
            <p> A region with a rich tin mining history during the English Colonial Period, the limestone cliffs surrounding the resort will take your breath away.</p>
          </div><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->
        <p class="text-right"><a class="btn btn-secondary" href="promotion.php" role="button">View details &raquo;</a></p>
        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-left" data-aos-duration="2000">
          <div class="col-md-7">
            <h2 class="featurette-heading">First, a beautiful place. <span class="text-muted">Melacca! It'll blow your mind.</span></h2>
            <p class="lead">Christ Church Malacca is an 18th-century Anglican church in the city of Malacca City, Malaysia. It is the oldest functioning Protestant church in Malaysia. </p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="images/melaka.jpg" alt="Melaka image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-right" data-aos-duration="2000">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good place. <span class="text-muted">Visit Penang Geogery Town?!</span></h2>
            <p class="lead">George Town is the colorful, multicultural capital of the Malaysian island of Penang. Once an important Straits of Malacca trading hub, the city is known for its British colonial buildings, Chinese shophouses and mosques.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="images/penang.jpg" alt="Penang image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-left" data-aos-duration="2000">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Concubine Lane Ipoh. </span></h2>
            <p class="lead">Concubine Lane is the most vibrant on weekends, holidays, where many pop-up stalls gather. You'll find cacti on sale, colourful ice balls, flower-shaped cotton candy and more!</p>
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
