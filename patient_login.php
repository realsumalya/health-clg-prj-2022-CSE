<?php 
//session_start();
include('./include/config.php');
include('./include/header.php');
?>

<section class="patient_info_sec">
  <div class="patient_infoo_parent">
        <div class="common_header">
          <h1> Patient Login:</h1>
        </div>
          <form id="regForm" action="actioninpage.php" method="post">
              <input type="email" placeholder="email" class="form-control" name="email">
              <br>
              <input type="password" placeholder="Create a Password" class="form-control" name="password">
              <br>
              <input type="submit" class="btn common_button btn-md" name="login" value="Login">
               
          </form>
          			<a href="patient_registration.php" style="color:indigo;text-transform: uppercase;">new user register</a>
        </div>
      </section>
</body>
</html>