<?php
  require("../loginheader.php");
  if($myAccountRole != "Admin")
  {
    header('Location:../index.php');
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

    <title>Manage Booking</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">blueBus</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="admin.php">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="manageBooking.php">
                    <span data-feather="bookmark"></span>
                    Ticket
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="managePromo.php">
                    <span data-feather="shopping-cart">(current)</span>
                    Promotion
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="manageUser.php">
                    <span data-feather="users"></span>
                    Customer
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="manageBus.php">
                    <span data-feather="truck"></span>
                    Bus
                  </a>
                </li> 
              </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Ticket Management</h1>
          </div>
          <!--Start the CRUD-->
          <?php require_once 'functionBooking.php'; ?>
          <?php
            if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">

          <?php
              echo $_SESSION['message'];
              unset ($_SESSION['message']);
          ?>
          </div>
          <?php endif ?>      
         
          <div class = "container">
            <div class="row">
              <div class ="col-sm-6"> 
                <div class="row justify-content">
                  <form action = "functionBooking.php" method="POST">
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Booking</label>
                            <input type="text" name="bookNo" class="form-control" value ="<?php echo $bkNo; ?>" placeholder="Booking No" readonly>
                            
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Account No</label>
                            <input type="text" name="accNo" class="form-control" value ="<?php echo $acctNo; ?>" placeholder="Account No" readonly>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Promotion Code</label>
                            <input type="text" name="proCode" class="form-control" value ="<?php echo $prCode; ?>" placeholder="Promotion Code" readonly>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Schedule No</label>
                            <input type="text" name="sNo" class="form-control" value ="<?php echo $scNo; ?>" placeholder="Schedule No" readonly>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Quantity</label>
                            <input type="text" name="quan" class="form-control" value ="<?php echo $quant; ?>" placeholder="Quantity">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Bus Seat</label>
                            <input type="text" name="bSeat" class="form-control" value ="<?php echo $buSeat; ?>" placeholder="Bus Seat">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Bus Date Time</label>
                            <input type="text" name="bDtime" class="form-control" value ="<?php echo $buDtime; ?>" placeholder="Bus Date Time" readonly>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Payment No</label>
                            <input type="text" name="pa" class="form-control" value ="<?php echo $paym; ?>" placeholder="Payment No" readonly>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Booking Status</label> 
                            <select name="bStatus" class="form-control" >
                                  <option  value ="<?php echo $boStatus; ?>"><?php echo $boStatus; ?></option>
                                  <option  value ="Cancelled">Cancelled</option>
                                  <option  value ="Completed">Completed</option>
                                  <option  value ="Confirmed">Confirmed</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Booking Time Stamp </label>
                            <input type="text" name="bTstamp" class="form-control" value ="<?php echo $boTstamp; ?>" placeholder="Booking Time Stamp" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                          <?php
                            if($update == true):
                          ?>
                              <button type="submit" name="uBooking" class="btn btn-info" >Update</button>
                              <button type="submit" name="cancelUpdate" class="btn btn-secondary" >Cancel</button>
                            <?php else: ?>
                            
                          <?php endif; ?>
                      </div>
                  </form> 
                </div>
              </div>
              <div class = "col-sm-5">
                <?php //Display Promotion code From database
                    include("../db.php");
                    $result = $con->query("SELECT * FROM booking") or die($con->error());  
                ?>
                <div class="row justify-content-center">
                    <table id="showtable" class="table">
                      <thead>
                        <tr>
                            <th>Booking No </th>
                            <th>Account No</th>
                            <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <?php
                          while ($row = $result->fetch_assoc()): ?>
                          <tr>
                              <td><?php echo $row['BookingNo'] ?></td>
                              <td><?php echo $row['AccountNo'] ?></td>
                              <td>
                              
                                <a href="manageBooking.php? edit=<?php echo $row['BookingNo']; ?>"
                                  class="btn btn-info">Edit</a>
                              </td>
                          </tr>
                      <?php endwhile; ?>
                    </table> 
                </div>
              </div>
            </div>
          </div>           
          <!--End the CRUD-->
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>
