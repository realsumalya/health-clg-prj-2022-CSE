<?php
include('include/config.php'); 
session_start();

  $email = $_POST['email'];
  $pass = $_POST['password'];
  if (empty($email) && empty($password)) {
        echo "<script>alert('Enter Email and pssword')</script>";
       
  }else{
    $query = "select * from patient_info_tbl where email='$email' AND password='$pass'";
    $res = mysqli_query($con,$query);

    if (mysqli_num_rows($res)==1) {
      
      header("Location: profile.php");
      $_SESSION['email'] = $email;
    }else{
      echo "<script>alert('Invalid Account')</script>";
      header("Location: patient_login.php");
    }
  }

?>

