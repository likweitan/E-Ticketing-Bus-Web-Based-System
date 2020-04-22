<?php
    
    
    include("../db.php");
   
    session_start();
    $prCode = '';
    $prcDes = '';
    $prcEnd = '';
    $prcStart = '';
    $update = false;
    
    if(isset($_POST['addProm']))
	{
        // get values 
		$proCode = $_POST['pCode'];
		$proCDes = $_POST['pcDes'];
		$proEnd = $_POST['pcEnd'];
        $proStart = $_POST['pcStart'];

        /*$mysqli->query("INSERT INTO promo_code (PromoCode,PromoCodeDescription,PromoCodeEndTimestamp,PromoCodeStartTimestamp) 
                        VALUES ('$proCode','$proCDes','$proEnd','$proStart')")or
                die($mysqli->error);
                */
        //Insert Query 
        $query = "INSERT INTO promo_code(PromoCode, PromoCodeDescription, PromoCodeEndTimestamp,PromoCodeStartTimestamp)
                  VALUES('$proCode', '$proCDes', '$proEnd', '$proStart')";
        //Past data information to database
        if (!$result = mysqli_query($con,$query)) {
            exit(mysqli_error($con));
        }
        
        
            $_SESSION['message'] = "New Promotion Added";
            $_session['msg_type'] = "success";
        
        header("location: addPromo.php");
    }
    if(isset($_GET['delete']))
	{
        // get values 
		$dproCode = $_GET['delete'];
		$change = "Offering from JB to Peneng";

       
        //Insert Query 
        $query = "UPDATE promo_code SET PromoCodeDescription = '$change' WHERE PromoCode = '$dproCode'";
        //Past data information to database
        if (!$result = mysqli_query($con,$query)) {
            exit(mysqli_error($con));
        }
       
            $_SESSION['message'] = "Delete has been deleted";
            $_session['msg_type'] = "danger";
        
        header("location: addPromo.php");
    }
   
    if(isset($_GET['edit']))
	{
        // get values 
		$uproCode = $_GET['edit'];
        $update = true;
        $result = $con->query("SELECT * FROM promo_code WHERE PromoCode = '$uproCode'");
        if (mysqli_num_rows($result)==1){
            $row = $result->fetch_array();
            $prCode = $row['PromoCode'];
            $prcDes = $row['PromoCodeDescription'];
            $prcEnd = $row['PromoCodeEndTimestamp'];
            $prcStart = $row['PromoCodeStartTimestamp'];
        }
        
    }
    if(isset($_POST['updateProm']))
    {
        $proCode = $_POST['pCode'];
        $proCDes = $_POST['pcDes'];
		$proEnd = $_POST['pcEnd'];
        $proStart = $_POST['pcStart'];
        $query = "UPDATE promo_code SET PromoCodeDescription = '$proCDes',PromoCodeEndTimestamp = '$proEnd',PromoCodeStartTimestamp = '$proStart' WHERE PromoCode = '$proCode'";
        //Past data information to database
        if (!$result = mysqli_query($con,$query)) {
            exit(mysqli_error($con));
        }
       
            $_SESSION['message'] = "Record has been Updated";
            $_session['msg_type'] = "warning";
        
        header("location: addPromo.php");
    }
?>