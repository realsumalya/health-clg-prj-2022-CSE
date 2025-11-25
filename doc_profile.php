<?php
include('include/config.php');
   session_start();
//error_reporting(0);
  
if(!$_SESSION['email'])  
{  
    header("Location: doctorlogin.php");//redirect to the login page to secure the welcome page without login access.  
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <link rel="stylesheet" href="pro.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>

<body>
    
      <section class="doctor_back_info">
            <div class="doctor_back_parent">
                        <div class="ban">
                            <img src="assects/images/112919_wo.jpg">
                        </div>
                <div class="doctor_back_child">
                              <h1>Health Bloom Doctor's Profile</h1>  

                </div>
            </div>
      </section> 

      <section class="doctor_details_info">
                  <?php 
                      
                      //$id=$_REQUEST['email'];
                      echo "----->".$_SESSION['email'];   
                      $email = $_SESSION['email'];
                                    $query = "SELECT * FROM doctor_info_tbl WHERE email='$email'";
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
            <div class="container doc_d">
                  <div class="doctor_details_img">
                              <div class="img_doc">
                                 <center> 
<?php echo "<img src='doctorimage/".$row['picture']."' style='height: 250px; border-radius:50%;' class='col-md-12 my-3'>";?>
                              </center> 
                              </div>
                  </div>
                  <div class="row">
                      <a href="logout.php">logout</a>
                        <div class="col-md-12 col-sm-6 col-xs-12 dd">
                              <h4>Hello Doctor <?php echo $row['name']; ?></h4>
                        </div>
                  </div>
            </div>                  
      </section>     
      


</body>
</html>


























