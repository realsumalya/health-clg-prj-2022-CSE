<?php
   include('include/config.php'); 
   include('include/header.php');
 
  if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $mobile=$_POST['mobile_no'];
    $email=$_POST['email'];
    $aadhar=$_POST['aadhar_number'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $ginfo=$_POST['general_info'];
     $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];

    // $image=$_FILES['image1']['name'];
    // $filename=$_FILES['image1']['tmp_name'];
    // $folder="upload/".$image;
      $image=$_FILES['image']['name'];
      $filename=$_FILES['image']['tmp_name'];
      echo $_FILES['image']['tmp_name'];
      $folder="upload/".$image;
       
    //    if ($name==""||$mobile==""||$email==""||$age==""||$address==""||$ginfo==""||$pass==""||$cpass=""){
    //   echo "<script>alert('Please enter all required fields..!!');</script>";
    //   echo "<script>window.location.href = 'patient_registration.php';</script>";
    // }else{
                   
              if($pass!=$cpass){
                echo "<script>alert('password does not matched!');</script>";      
                  }else{
              if (move_uploaded_file($filename, $folder)) {
                //echo "insert into patient_info_tbl(name,mobile_no,email,aadhar_number,age,address,general_info,password, picture) values('$name','$mobile','$email','$aadhar','$age','$address', '$ginfo', '$pass','$image')";
                $query=mysqli_query($con, "insert into patient_info_tbl(name,mobile_no,email,aadhar_number,age,address,general_info,password, picture) values('$name','$mobile','$email','$aadhar','$age','$address', '$ginfo', '$pass','$image')");

                if ($query){
                  echo "<script>alert('submit data succesessfully!');</script>";
                  echo "<script>window.location.href = 'patient_login.php';</script>";
                }else{
                  echo "<script>alert('Registration Failed, Please Try Again!!!');</script>";
                }
              }
            } 


}

?>

<section class="patient_info_sec">
  <div class="patient_info_parent">
        <div class="common_header">
          <h1> Patient Register:</h1>
        </div>
          <form id="regForm" method="post" enctype='multipart/form-data'>
            
            <!-- One "tab" for each step in the form: -->
            

              <input type="text" placeholder="First name..." class="form-control"  name="name" required>
              <input type="date" placeholder="age" class="form-control" name="age" required>
              <textarea name="address" placeholder="address" class="form-control" required></textarea>
              <input type="email" placeholder="email" class="form-control" name="email" required>
              <input type="text" placeholder="mobile number" class="form-control" name="mobile_no">
              <input type="text" placeholder="aadhar number" class="form-control" name="aadhar_number" required>
              <textarea name="general_info" placeholder="type a brief about your medical information" class="form-control"></textarea>
              <input type="password" placeholder="Create a Password" class="form-control" name="password" required>
              <input type="password" placeholder="Re-Type your password" class="form-control" name="cpassword" required>
              <input type="file" name="image" class="form-control" required accept="image/png, image/gif, image/jpeg"><br><br>
              <input type="submit" class="btn common_button btn-md" name="submit" value="submit">
               <p class="text-primary text-right">Already Have an Account? <a href="patient_login.php">Login</a></p>
          </form>

        </div>
      </section>
</body>
</html>