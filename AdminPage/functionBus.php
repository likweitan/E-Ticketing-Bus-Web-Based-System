<?php
    
    
    include("../db.php");
   
   
    $scno = '';
    $scbusno = '';
    $scdepart = '';
    $scarrive = '';
    $sstime = '';
    $scduration ='';
    $tkPrice ='';
    $update = false;
    
    if(isset($_POST['addBus']))
	{
        // get values 
		$bNo = $_POST['busNo'];
		$bCompany = $_POST['busCompany'];
		$bCapacity = $_POST['busCapacity'];
        

        
        //Insert Query 
        $query = "INSERT INTO bus(BusNo, BusCompany, BusCapacity)
                  VALUES('$bNo', '$bCompany','$bCapacity')";
        //Past data information to database
        if (!$result = mysqli_query($con,$query)) {
            exit(mysqli_error($con));
        }
            $_SESSION['message'] = "Record has been Add";
            $_session['msg_type'] = "Success";
        
        header("location: manageBus.php");
    }
    if(isset($_POST['addSchedule']))
	{
        // get values 
		$sNo = $_POST['scNo'];
		$scbNo = $_POST['sbNo'];
        $scDepa = $_POST['scd'];
        $scArr = $_POST['sca'];
        $scsTime = $_POST['sst'];
        $sDura = $_POST['sd'];
        $sTk = $_POST['tp'];

        
        //Insert Query 
        $query1 = "INSERT INTO bus_schedule(ScheduleNo, BusNo, ScheduleDepart,ScheduleArrive,
                            ScheduleStartTime,ScheduleDuration,TicketPrice)
                     VALUES ('$sNo','$scbNo','$scDepa','$scArr','$scsTime','$sDura','$sTk')";
        //Past data information to database
        if (!$result = mysqli_query($con,$query1)) {
            exit(mysqli_error($con));
        }
            $_SESSION['message'] = "Record has been Add";
            $_session['msg_type'] = "Success";
        
        header("location: manageBus.php");
    }

    if(isset($_GET['edit']))
	{
        // get values 
		$sno = $_GET['edit'];
        $update = true;
        $result = $con->query("SELECT * FROM bus_schedule WHERE ScheduleNo = '$sno'");
        if (mysqli_num_rows($result)==1){
            $row = $result->fetch_array();
            $scno = $row['ScheduleNo'];
            $scbusno = $row['BusNo'];
            $scdepart = $row['ScheduleDepart'];
            $scarrive = $row['ScheduleArrive'];
            $sstime = $row['ScheduleStartTime'];
            $scduration = $row['ScheduleDuration'];
            $tkPrice = $row['TicketPrice'];
            
        }  
    }
    if(isset($_POST['cancelUpdate']))
	{
        $update = false;
        header("location: manageBus.php");
    }
    if(isset($_POST['updateSchedule']))
    {
        $usNo = $_POST['scNo'];
		$uscbNo = $_POST['sbNo'];
        $uscDepa = $_POST['scd'];
        $uscArr = $_POST['sca'];
        $uscsTime = $_POST['sst'];
        $usDura = $_POST['sd'];
        $usTk = $_POST['tp'];

        $uquery = "UPDATE bus_schedule SET BusNo = '$uscbNo', ScheduleDepart = '$uscDepa',
                    ScheduleArrive = '$uscArr' ,ScheduleStartTime = '$uscsTime',
                    ScheduleDuration = '$usDura', TicketPrice = '$usTk'
                     WHERE ScheduleNo = '$usNo'";
        //Past data information to database
        if (!$result = mysqli_query($con,$uquery)) {
            exit(mysqli_error($con));
        }
       
            $_SESSION['message'] = "Record has been Updated";
            $_session['msg_type'] = "warning";
        
        header("location: manageBus.php");
    }
  
    if(isset($_GET['deleteRecord']))
    {
        $buNo = $_GET['deleteRecord'];
        $query = "DELETE FROM bus WHERE BusNo = '$buNo'";
        //Past data information to database
        if (!$result = mysqli_query($con,$query)) {
            exit(mysqli_error($con));
        }
       
            $_SESSION['message'] = "Record has been Deleted";
            $_session['msg_type'] = "Danger";
        
        header("location: manageBus.php");
    }
    if(isset($_POST['cancelDelete']))
	{
        $update = false;
        header("location: manageBus.php");
    }
?>