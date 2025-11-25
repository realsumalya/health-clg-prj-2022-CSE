<?php
  include('include/config.php');
  include('include/header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@1,500&family=Noto+Serif&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assects/css/log.css" type="text/css">
	<title>Doctor's Login</title>
</head>
<body>
  <div class="container">
  <div class="form-container">
              <form method="post" action="doc_actioninpage.php" method="post">
                  <div class="imgcont">
                  <img src="assects/images/admin.png" alt="Avatar" class="avatar">
                  </div>

                  <label for="email"><b>Doctor's Email :</b></label>
                  <input type="email" placeholder="Enter Email" name="email" required>

                  <label for="psw"><b>Doctor's Password :</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required> 

                  <input type="submit" class="btn common_button" value="submit" name="submit">
                  <p>New Doctor? <span style="color:blue;"><a href="doclo.php">Create An Account</a></span></p>  
              </form>
</div>
</div>
</body>
</html>