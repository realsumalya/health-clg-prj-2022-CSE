<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include("include/header.php"); ?>


	
<!-- result -->
<?php 
	$id = isset($_GET['id'])?$_GET['id']:"";
	
 ?>
				<!-- fetching doctor info -->
					<?php 
					include("include/config.php");
					

					$query="SELECT * FROM doctor_info_tbl WHERE id = $id ";

					$res = mysqli_query($con,$query);
					$row = mysqli_fetch_array($res);
							if (mysqli_num_rows($res) < 1) {
							    // output data of each row
							    while($row = mysqli_fetch_array($res)) {
							        
							        // $docname 	= $row["docname"];
							        $name=$row['dname'];
							       $speci=$_POST['specifi'];
							        
							        
							        $id = $row["id"];
									$fee = $row["fee"];
							    }
							}
							
							

					?>
					<!-- fetching doctor info -->

	<!-- 	booking info-->
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4"></div>
				
				<div class="col-md-4 my-2 jumbotron">
					<h5 class="text-center">Book Appointment</h5>
					<form method="post" enctype="multipart/form-data">
					
				<div class="form-group">
					<label class="font-weight-bold">Dr. Name:</label>
					<input type="text" name="dname" class="form-control" autocomplete="off" value="<?php echo $row['dname']; ?>" >
					
                    </div>
					
					 <div class="form-group">
					<label class="font-weight-bold">Expertise:</label>
						<input type="text" name="expertise" class="form-control" autocomplete="off" value="<?php echo $row['specifi']; ?>" >
					
                    </div>
					<div class="form-group">
					<label class="font-weight-bold">Your Name:</label>
						<input type="text" class="form-control" autocomplete="off" name="pname" value="" placeholder="Enter Your name">
					
                     </div>
					 <div class="form-group">
 					<label class="font-weight-bold">Mobile Number: </label>
					 <input type="text"  class="form-control" autocomplete="off"  name="pcontact" value="" placeholder="Enter Your Mobile Number"/>
					
					</div>
					<div class="form-group">
					<label class="font-weight-bold">Email Address:</label> 
						 <input type="email"  class="form-control" autocomplete="off"  name="pemail" value="" placeholder="Enter Your Email Address"/>
					
 					</div>
					 <div class="form-group">
					<label class="font-weight-bold">Address:</label> 
						 <input type="text"  class="form-control" autocomplete="off"  name="paddress" value="" placeholder="Enter Your Address">
					
                    </div>
                    <div class="form-group">
					<label class="font-weight-bold">
						 Date: <input type="date" name="dates" value="">
					</label>
					</div>

					<div class="form-group">
					<label class="font-weight-bold">
						 Time: <select name="tyme" required>
										
                                        <option>-Select-</option>
												<option>10.00am-12.00pm</option>
												<option>12.00pm-2.00pm</option>
												<option>2.00pm-4.00pm</option>
                                                <option>4.00pm-6.00pm</option>
                                                <option>6.00pm-8.00pm</option>
									</select>
					</label>
					</div>
					<!-- <div class="form-group">
					<label class="font-weight-bold">Your ID:</label> 
						<input type="text"  class="form-control" autocomplete="off"  name="pid" value="" placeholder="Enter Your ID">
					
					</div>
					<div class="form-group">
					<label>
						  <input type="hidden" name="did" value="<?//php echo $row['doctorid']; ?>">
					</label>
					</div>
					<div class="form-group">
					<label class="font-weight-bold">Reason For Appointment:</label> 
						<input type="text"  class="form-control" autocomplete="off"  name="reason" value="" placeholder="Enter Your Reason">
					
					</div> -->
					<div class="form-group">
					<!--<label class="font-weight-bold">Fees:</label>--> 
						<input type="hidden"  class="form-control" autocomplete="off"  name="fees" value="<?php echo $row['fee']; ?>">
					
					</div>
					<button name="submit" type="submit" class="btn btn-primary btn-block font-weight-bold" >Confirm</button><br> 
					<a href="search_doctor.php"><button name="" type="" class="btn btn-primary btn-block  font-weight-bold" >Cancel</button></a> <br>


				</form>
					


				</div>
				<div class="col-md-4"></div>								
		    </div>			
        </div>		
	</div>
				<!-- 	booking info-->
				
			<!-- confirming booking -->
					<?php

                      include("../include/connection.php");
						if(isset($_POST['submit'])){
							

						$query = " INSERT INTO appointment (dname,dcontact,expertise,pname,pcontact,pemail,paddress,dates,tyme,pid,did,reason,status,fees)
							VALUES ('" . $_POST["dname"] . "','" . $_POST["dcontact"] . "','" . $_POST["expertise"] . "','" . $_POST["pname"] . "', '" . $_POST["pcontact"] . "','" . $_POST["pemail"] . "','". $_POST["paddress"] . "','". $_POST["dates"] . "','". $_POST["tyme"] . "','". $_POST["pid"] . "','". $_POST["did"] . "','". $_POST["reason"] . "','pending','" . $_POST["fees"] . "')";
                            $res = mysqli_query($connect,$query);
							if ($res) {
                                echo "<script>alert('You have Booked An Appointment.')</script>";
                              } else {
							    echo "<script>alert('There was an Error')<script>";
							}

							
						}
					?> 

				<!-- confirming booking -->

	
	
 


	
	




	


 


	
</body>
</html>
