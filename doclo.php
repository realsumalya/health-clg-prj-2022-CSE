<?php
  include('include/config.php');
  include('include/header.php');

  if (isset($_POST['submit'])) {
        $name=$_POST['dname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $reg=$_POST['reg'];
        $quali=$_POST['quali'];
        $speci=$_POST['speci'];
        $fee=$_POST['fee'];
        $schedule=$_POST['schedule'];
        $gen=$_POST['gender'];
        $pass=$_POST['psw'];
        $repass=$_POST['psw-repeat'];
    
    
$image=$_FILES['image']['name'];
      $filename=$_FILES['image']['tmp_name'];
      echo $_FILES['image']['tmp_name'];
      $folder="doctorimage/".$image;
          if($pass!=$repass){
               echo "<script>alert('password does not matched');</script>";
           }else{
                if (move_uploaded_file($filename, $folder)) {
                
                //$query=mysqli_query($con, "insert into doctor_info_tbl(name,email,phone,regis,qualifi,specifi,fees,gender,picture, password) VALUES ('$name','$email','$phone','$reg','$quali','$speci','$fee','$gen','$image','$pass')");

$query=mysqli_query($con,"insert into doctor_info_tbl(name,email,phone,regis,qualifi,specifi,fees,schedule,gender,picture, password) VALUES ('$name','$email','$phone','$reg','$quali','$speci','$fee','$schedule','$gen','$image','$pass')");
echo $query;
                if ($query){
                  echo "<script>alert('submit data succesessfully!');</script>";
                  echo "<script>window.location.href = 'doctorlogin.php';</script>";
                }else{
                  echo "<script>alert('Registration Failed, Please Try Again!!!');</script>";
                }
              }
            } 
           }
  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assects/css/docs.css">
	<title>Doctor's Registresion</title>
</head>
<body>
  <div class="container">
  <div class="form-container">
  	<form method="post" enctype='multipart/form-data'>
    <div class="imgcont">
    <img src="assects/images/admin.png" alt="Avatar" class="avatar">
    </div>
    <label for="dname"><b>Name :</b></label>
    <input type="text" placeholder="Enter Doctorname" name="dname" required>

    <label for="email"><b>Email :</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
     
    <label for="phone"><b>Phone No. :</b></label>
    <input type="text" placeholder="Enter Phone No.." name="phone" required>

    <label for="reg"><b>Registration No. :</b></label>
    <input type="text" placeholder="Enter Registration No." name="reg" required>

    <label for="quali"><b>Qualification :</b></label>
    <input type="text" placeholder="Enter Qualification" name="quali" required>
    
    <label for="speci"><b>Specificaton :</b></label>
    <input type="text" placeholder="Enter Specificaton" name="speci" required>

    <label for="fee"><b>Fees :</b></label>
    <input type="text" placeholder="Enter Fees" name="fee" required>
    <label for="schedule">Available Time:</label>
    <select name="schedule" required >
                    <option>---Select One---</option>
                    <option value="10.00am-12.00pm">10.00am-12.00pm</option>
                    <option value="12.00pm-2.00pm">12.00pm-2.00pm</option>
                    <option value="2.00pm-4.00pm">2.00pm-4.00pm</option>
                    <option value="4.00pm-6.00pm">4.00pm-6.00pm</option>
                    <option value="6.00pm-8.00pm">6.00pm-8.00pm</option>
    </select>
    <div class="input-gen">	
    <input type="radio" name="gender" class="radio-button" value="male">
  	<label style="margin-right: 40px;"><b>Male</b></label>
  	<input type="radio" name="gender" class="radio-button" value="female">
  	<label style="margin-right: 40px;"><b>Female</b></label>
  	<input type="radio" name="gender" class="radio-button" value="Other">
  	<label><b>Other</b></label>
  	</div><br>
    
     <input type="file" name="image" class="form-control" required accept="image/png, image/gif, image/jpeg">
    
    <label for="psw"><b>Password :</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password :</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
   
    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </div>
</form>

    <p>Already have an Account? <a href="doctorlogin.php"> Login Now!</a></p>
</div>
</div>
</body>
</html>
