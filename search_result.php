<?php
session_start();
// $schedule = $_GET['schedule'];
// $specifi = $_GET['specifi'];

// echo $schedule."<br>".$specifi;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Appointment</title>
</head>
<body>
      <?php
        include("include/header.php");
        include("include/config.php");

    ?>
    <h5 class="text-center my-3">Total Doctors</h5>
        <?php
        //$query = "SELECT * FROM doctor_info_tbl WHERE schedule = '".$_POST["schedule"]."' && specifi = '".$_POST['speci']."' ";
      	$query = "SELECT * FROM doctor_info_tbl WHERE `specifi`='".$_POST['specifi']."' AND `schedule`='".$_POST['schedule']."' "; 
        echo $query;
        $res = mysqli_query($con,$query);
        $output = "";

$output .="<br><br><br><br>
<table class='table table-bordered'>
<tr>
                                <th>SL.</th>
								<th>Name</th>
								<th>Schedhule</th>
								
								<th>Expertise in</th>
                                <th>Fees</th>
                                                                 
								
								<th>Action</th>
</tr>
";
$cunrow=mysqli_num_rows($res); 
if($cunrow<1){
while($row=mysqli_fetch_assoc($res)) {
$output .= "
<tr>
<td>".$row['id']."</td>
<td>".$row['dname']."</td>
<td>".$row['schedule']."</td>

<td>".$row['specifi']."</td>
<td>".$row['fees']."</td>


<td>
                 <a href='booking.php?id=".$row['id']."'>
                 <button class='btn btn-info'>Book</button>
                </a>
         </td>

";
}
}
$output .= "
</tr>
</table>
";
echo $output;

	
         ?>


<button name="submit" type="submit" style="margin-left: 605px;" class="btn btn-primary"><a href="search_doctor.php" class="btn btn-primary btn-sm">Search Again</a></button>
	
       

       

       			
										
</body>
</html>