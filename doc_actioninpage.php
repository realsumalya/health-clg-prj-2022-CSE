<?php
include('include/config.php'); 
session_start();

  $email = $_POST['email'];
  $pass = $_POST['psw'];
  if (empty($email) && empty($pass)) {
        echo "<script>alert('Enter Email and pssword')</script>";
       
  }else{
    $query = "select * from doctor_info_tbl where email='$email' AND password='$pass'";
    
    $res = mysqli_query($con,$query);


    if (mysqli_num_rows($res)==1) {
      
      header("Location: doc_profile.php");
      $_SESSION['email'] = $email;
    }else{
      echo "<script>alert('Invalid Account')</script>";
      header("Location: doctorlogin.php");
    }
  }

?>

