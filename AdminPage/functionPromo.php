<?php
    
    
    include("../db.php");
   
    
    $prCode = '';
    $prcDes = '';
    $prcEnd = '';
    $prcStart = '';
    $prcPer = '';
    $psch='';
    $update = false;
    
    if(isset($_POST['addProm']))
	{
        // get values 
		$proCode = $_POST['pCode'];
		$proCDes = $_POST['pcDes'];
		$proEnd = $_POST['pcEnd'];
        $proStart = $_POST['pcStart'];
        $proPercentage = $_POST['pPer'];
        $Sche = $_POST['Sch'];

            //Insert Query 
            $query = "INSERT INTO promo_code(PromoCode, PromoCodeDescription, PromoPercentage, PromoCodeEndTimestamp,ScheduleNo,PromoCodeStartTimestamp)
            VALUES('$proCode', '$proCDes','$proPercentage', '$proEnd','$Sche','$proStart')";
            //Past data information to database
            if (!$result = mysqli_query($con,$query)) {
            exit(mysqli_error($con));
            }
        echo "<script>
        alert('New Record Added Successful');
        window.location.href='managePromo.php';
        </script>";
            
  
       
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
            $prcPer = $row['PromoPercentage'];
            $prcEnd = $row['PromoCodeEndTimestamp'];
            $psch = $row['ScheduleNo'];
            $prcStart = $row['PromoCodeStartTimestamp'];
            
        }  
    }
    
    if(isset($_POST['updateProm']))
    {
        $proCode = $_POST['upCode'];
        $proCDes = $_POST['pcDes'];
        $proPer = $_POST['pPer'];
		$proEnd = $_POST['pcEnd'];
        $proStart = $_POST['upcStart'];
        $prcSche = $_POST['Sch'];
        $query = "UPDATE promo_code SET PromoCodeDescription = '$proCDes', 
                    PromoPercentage = $proPer ,PromoCodeEndTimestamp = '$proEnd',
                    PromoCodeStartTimestamp = '$proStart', ScheduleNo = '$prcSche'
                     WHERE PromoCode = '$proCode'";
        //Past data information to database
        if (!$result = mysqli_query($con,$query)) {
            exit(mysqli_error($con));
        }
        echo "<script>
        alert('Record Update Successful');
        window.location.href='managePromo.php';
        </script>";
            
    }
    if(isset($_POST['cancelUpdate']))
	{
        $update = false;
        header("location: managePromo.php");
    }
?>