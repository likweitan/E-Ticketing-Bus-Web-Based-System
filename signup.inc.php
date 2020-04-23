<?php
    require("db.php");

    session_start();
    if(isset($_POST['submit'])){
    $inputConfirmPassword = md5($_POST["inputConfirmPassword"]);
    $inputFirstName = mysqli_real_escape_string($con, $_POST["inputFirstName"]);
    $inputLastName =  mysqli_real_escape_string($con,$_POST["inputLastName"]);
    $inputEmail =  mysqli_real_escape_string($con,$_POST["inputEmail"]);
    $inputPassword =  mysqli_real_escape_string($con, md5($_POST["inputPassword"]));
    $inputGender = mysqli_real_escape_string($con, $_POST["inputGender"]);
    $inputDate =  mysqli_real_escape_string($con,$_POST["inputDate"]);
    $country =  mysqli_real_escape_string($con,$_POST["country"]);
    $inputPhoneNumber = mysqli_real_escape_string($con,$_POST["inputPhoneNumber"]);
    $email = mysqli_query($con,"SELECT * FROM account WHERE Email = '$inputEmail'");

    //Input Validation
    if($inputPassword==$inputConfirmPassword & mysqli_num_rows($email) == 0 & $inputGender!="Choose..." ){
      $insert =  mysqli_query($con,"INSERT INTO account (FirstName,LastName,Email,Password,Gender,BirthDate,Nationality, PhoneNumber)
        VALUES('$inputFirstName', '$inputLastName', '$inputEmail', '$inputPassword', '$inputGender','$inputDate','$country','$inputPhoneNumber')");
        header("location: login.php?adduser=success");
      }
         else if(mysqli_num_rows($email) > 0){
            header("location:signup.php?error=email_exist");
          }
         else if($inputGender=="Choose..."){
            header("location: signup.php?error=invalid_gender");
          }
         else if($inputPassword!=$inputConfirmPassword ) {
            header("location:signup.php?error=confirm_password_invalid");
          }
    else{
         header("location:signup.php?error=unfill");
    }
}
?>
