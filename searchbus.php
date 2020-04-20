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

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body>

    <!-- HEADER-->
  <?php
    include('assets/header.php');
  ?>

<body class="text-center"style="background-image: url('images/cover1.jpg');">

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">

  </header>

  <main role="main" class="inner cover" >
  
  <div class="container col-md-12" >
  <div class="col-md-12 mb-6">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputGender">From</label>
      <span style="color: red !important; display: inline; float: none;">*</span> 
      <select id="inputGender" name="inputGender" class="form-control" required>
        <option selected>From...</option>
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
    <div class="form-group col-md-6">
    <label for="inputGender">To</label>
      <span style="color: red !important; display: inline; float: none;">*</span> 
      <select id="inputGender" name="inputGender" class="form-control" required>
        <option selected>To...</option>
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
    <div class="form-group col-md-6">
    <label for="inputDepartDate">Depart Date</label>
      <span style="color: red !important; display: inline; float: none;">*</span> 
      <input type="date" class="form-control" id="inputDepartDate" name="inputDepartDate" required>
    </div>
    <div class="form-group col-md-6">
    <label for="inputReturnDate">Return Date</label>
      <span style="color: red !important; display: inline; float: none;">*</span> 
      <input type="date" class="form-control" id="inputReturnDate" name="inputReturnDate" required>
    </div>
  </div>
  </div>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
    <p>&copy; 2020 blueBus Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </div>
  </footer>
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://cdn.jsdelivr.net/npm/holderjs@2.9.7/holder.min.js"></script>
  </body>
</html>
