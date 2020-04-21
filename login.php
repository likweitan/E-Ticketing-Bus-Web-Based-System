<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>blueBus - Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/floating-labels.css" rel="stylesheet">
    <style>
    #message {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
}
#inner-message {
    margin: 0 auto;
}
    </style>
  </head>

  <body>
  <!-- error message -->
  <?php
        if(!empty($_GET["error"]))
        {
          echo '<div id="message">
          <div style="padding: 5px;">
          <div id="inner-message" class="alert alert-warning" role="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>';
          if($_GET["error"] == "wrong_password")
            echo "Your password is incorrect";
          else
            echo "Your account is not existed";
           echo '</div>
           </div>
       </div>';
        }
        else if(!empty($_GET["adduser"]))
        {
          echo '<div id="message">
          <div style="padding: 5px;">
          <div id="inner-message" class="alert alert-warning" role="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>';
          if($_GET["adduser"] == "success")
            echo "Your account has been created";
           echo '</div>
           </div>
       </div>';
        }
  ?>
        


    <form class="form-signin" action="login.inc.php" method="post">
      <div class="text-center mb-4">
        <img class="mb-4" src="images/logo_black.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">blueBus</h1>
        <p>an online bus booking website</p>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      
      <button class="mt-3 mb-3 btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

      
      <p class="mt-3 mb-3 text-muted text-center">Don't have account? <a href="signup.php">Sign Up</a></p>
      
      <p class="mt-2 mb-3 text-muted text-center">&copy; 2020 blueBus</p>
    </form>
   
  </body>
<!-- Bootstrap-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
