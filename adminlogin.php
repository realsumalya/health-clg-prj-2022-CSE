
<?php
session_start();
include("include/config.php");
if (isset($_POST['login'])) {
  
  $username = $_POST['username'];
  $password = $_POST['password'];

  $error = array();

  if (empty($username)) {
      $error['admin'] = "Enter Your Username";
  }else if(empty($password)){
       $error['admin'] = "Enter Your Password";

  }

  if (count($error)==0) {
      $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

      $result = mysqli_query($con,$query);

      if(!$result || mysqli_num_rows($result) == 1) {
      echo"<script>alert('You have Login As an admin')</script>";
      
      header("Location:admin/adminindex.php");
      $_SESSION['admin'] = $username;
      exit();
    }else{
       echo"<script>alert('Invalid Username or Password')</script>";

       }
   }
}
?>
<!DOCTYPE html>
<html>
<head>
		<title>Admin Login Page</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@1,500&family=Noto+Serif&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css">
      <link rel="stylesheet" type="text/css" href="assects/css/style.css">
      <link rel="stylesheet" type="text/css" href="assects/css/responsive.css">

</head>
<body style="">
<?php
include("include/header.php");
?>	
  <div class="admin_sec_info">
    <div class="admin_sec_parent">

                        <div class="container">
                          
                            <div class="row">
                              <div class="col-md-3"></div>
                              <div class="col-md-6 jumbotron">
                                <center><img src="assects/images/admin.png" ></center>
                                <form method="post" class="my-2">
                                  <div>
                                    <?php
                                      if (isset($error['admin'])) {
                                       $sh = $error['admin'];
                                       $show = "<h4  class='alert alert-danger'>$sh</h4>";
                                       
                                    }else{

                                    $show = "";
                                  }
                                    echo $show;
                                    ?>
                                  </div>
                                  <div class="form-group">
                                    <label class="font-weight-bold">Username:</label>
                                    <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Enter Your Username">
                                  </div>
                                  <div class="form-group">
                                    <label class="font-weight-bold">Password:</label>
                                    <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Enter Your Password">
                                  </div>
                                  <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
                                </form>
                              </div>
                              <div class="col-md-3"></div>

                            </div>

                          

                        </div>
    </div>
  </div>
</body>
</html>