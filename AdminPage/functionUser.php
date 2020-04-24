<?php
    
    
    include("../db.php");
    

    $accNo = '';
    $accRole ='';
    $fName ='';
    $lName ='';
    $ema ='';
    $passw ='';
    $gen ='';
    $dobrith ='';
    $nati ='';
    $pnum ='';
    $atstamp ='';
    $update = false;

    if(isset($_GET['edit']))
	{
        // get values 
		$sAcc = $_GET['edit'];
        $update = true;
        $result = $con->query("SELECT * FROM account WHERE AccountNo = '$sAcc' AND AccountRole !='admin' ");
        if (mysqli_num_rows($result)==1){
            $row = $result->fetch_array();
            $accNo = $row['AccountNo'];
            $accRole =$row['AccountRole'];
            $fName =$row['FirstName'];
            $lName =$row['LastName'];
            $ema =$row['Email'];
            $passw =$row['Password'];
            $gen =$row['Gender'];
            $dobrith =$row['BirthDate'];
            $nati =$row['Nationality'];
            $pnum =$row['PhoneNumber'];
            $atstamp =$row['AccountTimestamp'];
        }  
    }
    if(isset($_POST['uUser']))
    {
        $uAccNo = $_POST['an'];
        $uEmail =$_POST['em'];
        $uPw =$_POST['pw'];
        $uPhone =$_POST['pn'];
        $query = "UPDATE account SET Email = '$uEmail', Password ='$uPw',
                    PhoneNumber = $uPhone WHERE AccountNo = '$uAccNo'";
        //Past data information to database
        if (!$result = mysqli_query($con,$query)) {
            exit(mysqli_error($con));
            
        }
       
            
        header("location: manageUser.php");
    }
    if(isset($_POST['cUpate']))
	{
        $update = false;
        header("location: manageUser.php");
    }
?>