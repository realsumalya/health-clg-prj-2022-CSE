<?php
include('include/config.php');
   session_start();
//error_reporting(0);
  
if(!$_SESSION['email'])  
{  
    //header("Location: patient_login.php");//redirect to the login page to secure the welcome page without login access.  
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="assects/css/profilepage.css" rel="stylesheet" >
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>  
  <div class="container">
    <div class="col-md-12"> 
            <div class="row">
             <div class="col-md-2" style="margin-left: -30px;">
              </div>
              <a href="logout.php">Logout</a>
              <div class="col-md-8">
              <div class="container">
                <div class="col-md-12">
                  <div class="row row-twoo">
                    <div class="col-md-8">
                      <?php
                      
                      //$id=$_REQUEST['email'];
                      echo "----->".$_SESSION['email'];   
                      $email = $_SESSION['email'];
                                    $query = "SELECT * FROM patient_info_tbl WHERE email='$email'";
                                    $res = mysqli_query($con,$query);
                                    $row = mysqli_fetch_array($res);  
                                    if (isset($_POST['upload'])) {
                                     $profile = $_FILES['profile']['name'];
                                     if (empty($profile)) {
                                       
                                     }else{
                                        // $query = "UPDATE patient_info_tbl SET profile='$profile' WHERE email='$email'";
                                        // $res = mysqli_query($con,$query);
                                        if ($res) {
                                         move_uploaded_file($_FILES['profile']['tmp_name'], "img/$profile");
                                        }

                                       }
                                    }
                                    ?> 
                                    
                                    <div class="col-md-9">
                                      <h4 class="text-center my-2 font-weight-bold text-danger">My Profile</h4>
                

                <?php
                              echo "<img src='upload/".$row['picture']."' style='height: 250px; border-radius:50%;' class='col-md-12 my-3'>";

                             ?>

                          
                          <h6 class="my-3 font-weight-bold">Full Name : <?php echo $row['name']; ?></h6>
                          <h6 class="my-3 font-weight-bold">Mobile Number : <?php echo $row['mobile_no']; ?></h6>
                          <h6 class="my-3 font-weight-bold">Date of Birth : <?php echo $row['age']; ?></h6>
                          <h6 class="my-3 font-weight-bold">address : <?php echo $row['address']; ?></h6>
                          <h6 class="my-3 font-weight-bold">Email : <?php echo $row['email']; ?></h6>
                          <h6 class="my-3 font-weight-bold">Aadhar Number : <?php echo $row['aadhar_number']; ?></h6>
                          
                          <h6 class="my-3 font-weight-bold">Date Register : <?php echo $row['reg_date']; ?></h6>
              </div>                  
                    </div>
                    <div class="col-md-4" style="margin-top:150px;">
                      <a class="btn btn-secondary text-white">Update Profile</a><br><br>
                      <a class="btn btn-info text-white ">My Appointment</a><br><br>
                      <a class="btn btn-success text-white" href="search_doctor.php">Book Appointment</a><br><br>
                      <a class="btn btn-dark text-white ">Book Appointment</a><br><br>
                      <a class="btn btn-dark text-white ">Book Appointment</a><br><br>
                      

                      </div>

                  </div>
                  
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

</body>
</html>