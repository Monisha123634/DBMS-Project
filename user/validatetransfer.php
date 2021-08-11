<?php
$con=mysqli_connect("localhost","root","","prisonpro");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$Nid= mysqli_real_escape_string($con,$_POST['Nid']);
$From= mysqli_real_escape_string($con,$_POST['From']);
$To=mysqli_real_escape_string($con,$_POST['To']);
 $date= mysqli_real_escape_string($con,$_POST['on']);



 $sql = "INSERT INTO transfer (National_id, From_prison, To_prison, Dateoftransfer) 
VALUES ('$Nid', '$From', '$To', '$date');";




if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
	<script type="text/javascript">
						alert(" added the record! thank you");
						window.location = "transfer.php";
					</script>