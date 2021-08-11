<?php
$con=mysqli_connect("localhost","root","","prisonpro");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security


$Nid= mysqli_real_escape_string($con,$_POST['Nid']);
$From= mysqli_real_escape_string($con,$_POST['from']);
$To=mysqli_real_escape_string($con,$_POST['to']);
//deal with date and concatenate variables month, day, year
 $date= mysqli_real_escape_string($con,$_POST['date']);
 


 $sql = "INSERT INTO transfer (National_id, From_prison, To_prison, Dateoftransfer) 
VALUES ('$Nid', '$From', '$To', '$date');";




if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "transfer.php";
					</script>