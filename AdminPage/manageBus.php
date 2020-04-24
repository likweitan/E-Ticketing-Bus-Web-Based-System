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
            <h1 class="h2">Bus Management</h1>
          </div>
          <!--Start the CRUD-->
          <?php require_once 'functionBus.php'; ?>
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
              <div class ="col-sm-5"> 
                <div class="row justify-content">
                  <form action = "functionBus.php" method="POST">
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Bus No</label>
                            <input type="text" name="busNo" class="form-control"  placeholder="Bus No" >
                            
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Bus Company</label>
                            <input type="text" name="busCompany" class="form-control"  placeholder="Bus Company" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Bus Capacity</label>
                            <input type="text" name="busCapacity" class="form-control" placeholder="Bus Capacity">
                        </div>
                        <div class="form-group col-sm-6">
                                <button type="submit" name="addBus" class="btn btn-primary" >Add</button>
                        </div>
                      </div>
                  </form> 
                </div>
              </div>
              <div class = "col-sm-7">
                <?php //Display Promotion code From database
                    include("../db.php");
                    $result = $con->query("SELECT * FROM bus") or die($con->error());  
                ?>
                <div class="row justify-content-center">
                    <table id="showtable" class="table">
                      <thead>
                        <tr>
                            <th>Bus No </th>
                            <th>Bus Company</th>
                            <th>Bus Capacity</th>
                            <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <?php
                          while ($row = $result->fetch_assoc()): ?>
                          <tr>
                              <td><?php echo $row['BusNo'] ?></td>
                              <td><?php echo $row['BusCompany'] ?></td>
                              <td><?php echo $row['BusCapacity'] ?></td>
                              <td>
                              
                                
                                <a href="functionBus.php? deleteRecord=<?php echo $row['BusNo']; ?>"
                                  class="btn btn-danger">Delete</a>
                              </td>
                          </tr>
                      <?php endwhile; ?>
                    </table> 
                </div>
              </div>
            </div>
          </div>           
          <!--End the CRUD-->
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Bus Schedule Management</h1>
          </div>
          <!--Start the CRUD-->
          <?php require_once 'functionBus.php'; ?>
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
              <div class ="col-sm-5"> 
                <div class="row justify-content">
                  <form action = "functionBus.php" method="POST">
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Schedule No</label>
                            <input type="text" name="scNo" class="form-control" value ="<?php echo $scno; ?>"  placeholder="Schedule No" >
                            
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Bus No</label>
                              <select name="sbNo" class="form-control" placeholder="Bus No" >
                                <?php
                                    include("../db.php");
                                    $result1 = $con->query("SELECT * FROM bus") or die($con->error());   
                                ?>
                                    <option  value ="<?php echo $scbusno; ?>"><?php echo $scbusno; ?></option>
                                <?php while($rows = $result1->fetch_assoc()):
                                      $BusNo = $rows['BusNo'];?>
                                    <option  value ="<?php echo $BusNo; ?>"><?php echo $BusNo; ?></option>
                                      
                                <?php endwhile; ?>
                              </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Schedule Depart</label>
                            <select name="scd" class="form-control" >
                                    <option  value ="<?php echo $scdepart; ?>"><?php echo $scdepart; ?></option>
                                    <option  value ="Johor‎">Johor‎</option>
                                    <option  value ="Kedah‎">Kedah‎</option>
                                    <option  value ="Kelantan‎">Kelantan‎</option>
                                    <option  value ="Malacca‎">Malacca‎</option>
                                    <option  value ="Negeri Sembilan">Negeri Sembilan</option>
                                    <option  value ="Pahang‎">Pahang‎</option>
                                    <option  value ="Penang">Penang</option>
                                    <option  value ="Ipoh">Ipoh</option>
                                    <option  value ="Perlis‎">Perlis‎</option>
                                    <option  value ="Selangor">Selangor</option>
                                    <option  value ="Terengganu‎">Terengganu‎</option>
                              </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Schedule Arrive</label>
                              <select name="sca" class="form-control" >
                                    <option  value ="<?php echo $scarrive; ?>"><?php echo $scarrive; ?></option>
                                    <option  value ="Johor‎">Johor‎</option>
                                    <option  value ="Kedah‎">Kedah‎</option>
                                    <option  value ="Kelantan‎">Kelantan‎</option>
                                    <option  value ="Malacca‎">Malacca‎</option>
                                    <option  value ="Negeri Sembilan">Negeri Sembilan</option>
                                    <option  value ="Pahang‎">Pahang‎</option>
                                    <option  value ="Penang">Penang</option>
                                    <option  value ="Ipoh">Ipoh</option>
                                    <option  value ="Perlis‎">Perlis‎</option>
                                    <option  value ="Selangor">Selangor</option>
                                    <option  value ="Terengganu‎">Terengganu‎</option>
                              </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Schedule Start Time</label>
                            <input type="time" name="sst" class="form-control" value ="<?php echo $sstime; ?>" placeholder="Schedule Start Time">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Schedule Duration</label>
                            <input type="text" name="sd" class="form-control" value ="<?php echo $scduration; ?>" placeholder="Schedule Duration">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Ticket Price</label>
                            <input type="text" name="tp" class="form-control" value ="<?php echo $tkPrice; ?>" placeholder="Ticket Price">
                        </div>
                        <div class="form-group col-sm-6">
                          <?php
                              if($update == true):
                            ?>
                                <button type="submit" name="updateSchedule" class="btn btn-info" >Update</button>
                                <button type="submit" name="cancelUpdate" class="btn btn-secondary" >Cancel</button>
                              <?php else: ?>
                                <button type="submit" name="addSchedule" class="btn btn-primary" >Add</button>
                            <?php endif; ?>
                                
                        </div>
                      </div>
                  </form> 
                </div>
              </div>
              <div class = "col-sm-7">
                <?php //Display Promotion code From database
                    include("../db.php");
                    $result = $con->query("SELECT * FROM bus_schedule") or die($con->error());  
                ?>
                <div class="row justify-content-center">
                    <table id="showtable" class="table">
                      <thead>
                        <tr>
                            <th>Schedule No</th>
                            <th>Bus No </th>
                            <th>Ticket Price </th>
                            <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <?php
                          while ($row = $result->fetch_assoc()): ?>
                          <tr>
                              <td><?php echo $row['ScheduleNo'] ?></td>
                              <td><?php echo $row['BusNo'] ?></td>
                              <td><?php echo $row['TicketPrice'] ?></td>
                              
                              <td>
                              
                                
                                <a href="manageBus.php? edit=<?php echo $row['ScheduleNo']; ?>"
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
