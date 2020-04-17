<?php
    require("db.php");

    session_start();
    if(isset($_POST['submit'])){
    $inputConfirmPassword = $_POST["inputConfirmPassword"];
    $inputFirstName = mysqli_real_escape_string($con, $_POST["inputFirstName"]);
    $inputLastName =  mysqli_real_escape_string($con,$_POST["inputLastName"]);
    $inputEmail =  mysqli_real_escape_string($con,$_POST["inputEmail"]);
    $inputPassword =  mysqli_real_escape_string($con, $_POST["inputPassword"]);
    $inputGender = mysqli_real_escape_string($con, $_POST["inputGender"]);
    $inputDate =  mysqli_real_escape_string($con,$_POST["inputDate"]);
    $country =  mysqli_real_escape_string($con,$_POST["country"]);
    $inputPhoneNumber = mysqli_real_escape_string($con,$_POST["inputPhoneNumber"]);
    
    if($inputPassword==$inputConfirmPassword){
    $insert =  mysqli_query($con,"INSERT INTO account (FirstName,LastName,Email,Password,Gender,BirthDate,Nationality, PhoneNumber)
      VALUES('$inputFirstName', '$inputLastName', '$inputEmail', '$inputPassword', '$inputGender','$inputDate','$country','$inputPhoneNumber')");
    }
    else
    echo   "Confirm password invalid! Please match your password!";
  }
?>