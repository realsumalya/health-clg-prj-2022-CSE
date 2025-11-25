<?php
session_start();

$_SESSION['schedule'] = $schedule;
$_SESSION['specifi'] = $specifi;



?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor list</title>
</head>
<body>
      <?php
        include("include/header.php");
        include("include/config.php");
       ?>

       <div class="container-fluid" style="margin-top: 150px;">
       	<div class="col-md-12">
       		<div class="row">
       			<div class="col-md-2" style="margin-left: -30px;">
       				<?php
       				//include("sidenav.php");

       				?>

       			</div>
       			<div class="col-md-10" style="padding-left:300px;">
       				<h3 class="text-center"></h3>
                       <div class="col-md-6 jumbotron">
      			<h5 class="text-center pd-5">Search Here</h5>
      			<form action="search_result.php" method="post" class="form-group" >

					<!-- testing -->
					<label class="pt-4">
						Schedhule:<select name="schedule" type="text"/>
												<option>-Select-</option>
												<option>10.00am-12.00pm</option>
												<option>12.00pm-2.00pm</option>
												<option>2.00pm-4.00pm</option>
                        <option>4.00pm-6.00pm</option>
                        <option>6.00pm-8.00pm</option>
											</select>

					</label><br><br>
					<!-- testing end-->

					<label>
						 Category:<select name="specifi" type="text"/>
												<option>-Select-</option>
												<option value="Cardiologist">Cardiologist</option>
                        <option value="Dentist">Dentist</option>
                        <option value="Orthopaedic Surgeon">Orthopaedic Surgeon</option>
                        <option value="Phychiatrists">Phychiatrists</option>
                        <option value="Neurologist">Neurologist</option>
											</select>

					</label><br><br>
					<button name="submit" type="submit" class="btn btn-primary btn-block">Search</button>
					<br>
					
					</form>



      		</div>


					
		 	</div>
	</div>
	
       				
       			</div>

       		</div>

       	</div>

       </div>
</body>
</html>