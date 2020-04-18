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
    $email = mysqli_query($con,"SELECT * FROM account WHERE Email = '$inputEmail'");

    if($inputPassword==$inputConfirmPassword && mysqli_num_rows($email) < 0){
    $insert =  mysqli_query($con,"INSERT INTO account (FirstName,LastName,Email,Password,Gender,BirthDate,Nationality, PhoneNumber)
      VALUES('$inputFirstName', '$inputLastName', '$inputEmail', '$inputPassword', '$inputGender','$inputDate','$country','$inputPhoneNumber')");
      header("location: login.php");
    }
    else if(mysqli_num_rows($email) > 0){
      header("location:signupfail.php");
    }
    else{
    header("location:signupfail1.php");
  }
}
?>
