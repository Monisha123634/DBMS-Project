
<?php
$con=mysqli_connect("localhost","root","","prisonpro");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

        $pno =$_POST['pno'];
        $pname = $_POST['pname'];
        $location = $_POST['location'];
        $opendate = $_POST['date'];
        
        $contact =$_POST['contact'];
        $capacity =$_POST['Campus'];
        


       $sql="insert into newprison set
                    id = '$pno',
                    pname = '$pname',
                    location = '$location',
                    opendate = '$opendate',
                    contact = '$contact',
                    capacity = '$capacity'";  

 



if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "officerpanel.php";
					</script>